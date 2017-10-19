<?php

namespace App\Http\Controllers;

use App\building;
use Illuminate\Http\Request ;
use App\Http\Requests\BuRequest;
use    DataTables;
use DB;
use Auth ;
class BuildingController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
           return view('admin.bu.index');
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return  view("admin.bu.add");
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(BuRequest $request,building $bu)
        {
            $user = Auth::user();
           
        $input=$request->all();
        if(isset($input['image'])){
                $input['image']=$this->upload($input['image']);
        }else{
                $input['image']='website/images/default.png';
        }
               $bu->create([
                       'bu_name'       =>$request->bu_name,
                       'bu_price'      =>$request->bu_price,
                       'bu_rent'       =>$request->bu_rent,
                       'bu_square'     =>$request->bu_square,
                       'bu_type'       =>$request->bu_type,
                       'bu_small_dis'  =>$request->bu_small_dis,
                       'bu_meta'       =>$request->bu_meta,
                       'bu_longitude'  =>$request->bu_longitude,
                       'bu_latitude'   =>$request->bu_latitude,
                       'bu_large_dis'  =>$request->bu_large_dis,
                       'bu_status'     =>$request->bu_status,
                       'rooms'         =>$request->rooms,
                       'user_id'       =>$user->id,
                       'bu_palce'      =>$request->bu_palce,
                       'image'         =>$input['image'],

                           ]);
           //dd($items);
           //BuRequest::create($items);
            
            return redirect('adminpanel/bu')->withFlashMessage('you  created  a  new Building');
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\building  $building
         * @return \Illuminate\Http\Response
         */
        public function show(building $building)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\building  $building
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $bu=building::find($id);
            return  view('admin.bu.edit',compact('bu'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\building  $building
         * @return \Illuminate\Http\Response
         */
        public function update($id,BuRequest $request)
        {
            


        $input=$request->all();
        if(isset($input['image'])){
                $input['image']=$this->upload($input['image']);
        
        }
        building::findOrFail($id)->update($input);

            return   redirect ()->back()->withFlashMessage('you  update  a  building');
        }
        //strat of this  is  the image  function  
        public function upload($file){
                $extension =$file->getClientOriginalExtension();
                $sha1 =sha1($file->getClientOriginalName());
                $filename=date('Y-m-d-i-s')."_".$sha1.".".$extension;
                $path=public_path('/website/images/');
                $file->move($path,$filename);
                return  'website/images/'.$filename;
                
            }
        //end of this  is  the image  function  
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\building  $building
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            building::findOrFail($id)->delete();
            return   redirect ()->back()->withFlashMessage('you  destroy  a  building');
        }

        public function anyData(building $bu)
    {

      $bus = $bu->all();

        return DataTables::of($bus)

            ->editColumn('bu_name', function ($model) {
                
                return \Html::link('/adminpanel/bu/'.$model->id.'/edit',$model->bu_name);

            })
            ->editColumn('bu_type', function ($model) {
                $type=bu_type();
                return $type[$model->bu_type];
            })

            ->editColumn('bu_status', function ($model) {
                return $model->bu_status == "0" ? "غير مفعل" : "مفعل";
            })


            ->editColumn('mybu', function ($model) {
                
                
                return \Html::link('/adminpanel/bu/'.$model->id,"<span class='btn btn-danger btn-circle'> <i class='fa fa-link'></i> </span>"); 
            })
            
            ->editColumn('control', function ($model) {
                $all = \Html::link('/adminpanel/bu/'.$model->id. '/edit','edit',array('class'=>'btn btn-success btn-circle'));
                
                return $all;
            })
            ->editColumn('control2', function ($model) {
                $all2="";
                
                    
                     $all2 = \Html::link('/adminpanel/bu/'.$model->id.'/delete','delete',array('class'=>'btn btn-danger btn-circle'));
               
                return $all2;
            })
            
            ->make(true);

    }

    public function showAllEnable()
    {

        $buAll=building::where('bu_status',1)->orderBy('id','desc')->paginate(2);
        return view('website.bu.all',compact('buAll'));
    }
    public function ForRent()
    {

        $buAll=building::where('bu_rent',1)->where('bu_status',1)->orderBy('id','desc')->paginate(2);
        return view('website.bu.all',compact('buAll'));
    }

    public function ForBuy()
    {

        $buAll=building::where('bu_rent',0)->where('bu_status',1)->orderBy('id','desc')->paginate(2);
        return view('website.bu.all',compact('buAll'));
    }

    public function ShowBytype($id)
    {
        if (in_array($id, ['0','1','2'])) {
            # code...
        
        $buAll=building::where('bu_type',$id)->where('bu_status',1)->orderBy('id','desc')->paginate(2);
        return view('website.bu.all',compact('buAll'));
    }else{
        return redirect ()->back();
    }
    }


    public function search(Request $request)
    {

        // $max=$request->bu_price_to   == '' ? '5000000': $request->bu_price_to;

        // $min=$request->bu_price_from == '' ? '50000'  : $request->bu_price_from;
        // dd($max,$min);

        $requestAll=array_except($request->toArray(),['submit','_token','page']);

        $query=DB::table('buildings')->select('*');

             $search='search';
             $array=[];
             $cout=count($requestAll);
             $i = 0;
            foreach ($requestAll as $key => $req)
            {
                $i++;
                    if ($req !='') 
                    {
                        # code...
                    
                        if($key=='bu_price_from' && $request->bu_price_to =='')
                        {
                            $query->where('bu_price','>=',$req);

                        }elseif($key =='bu_price_to'&&$request->bu_price_from =='')
                        {
                            $query->where('bu_price','<=',$req);

                        }else
                        { 
                            if ($key !='bu_price_to' && $key !='bu_price_from')
                               {
                                 $query->where($key,$req);                            
                               }
                            

                        }

                        $array[$key]=$req;
                   
                    }elseif($cout ==$i &&$request->bu_price_to !='' && $request->bu_price_from !=''){
                        $query->whereBetween('bu_price',[$request->bu_price_from,$request->bu_price_to]);
                        $array[$key]=$req;

                    }
            }
             
            $buAll= $query->paginate(1);
            return view('website.bu.all',compact('buAll','array'));
    }

    public function ShowSingle($id)
    {
            $buInfo =building::findOrFail($id);
            $same_rent=building::where('bu_rent',$buInfo->bu_rent)->orderBy(DB::raw('RAND()'))->take(5)->get();
            $same_type=building::where('bu_type',$buInfo->bu_type)->orderBy(DB::raw('RAND()'))->take(5)->get();

            return  view('website.bu.buInfo',compact('buInfo','same_rent','same_type'));    
    }
}

