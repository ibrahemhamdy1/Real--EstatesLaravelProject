<?php

namespace App\Http\Controllers;

use App\building;
use Illuminate\Http\Request ;
use App\Http\Requests\BuRequest;
use    DataTables;

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
            $buUpdate=building::findOrFail($id);
            $buUpdate->fill($request->all())->save();
            return   redirect ()->back()->withFlashMessage('you  update  a  building');
        }

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

        $buAll=building::where('bu_type',$id)->where('bu_status',1)->orderBy('id','desc')->paginate(2);
        return view('website.bu.all',compact('buAll'));
    }
}

