<?php

namespace App\Http\Controllers;
use  App\User;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequestAdmin;
use    DataTables;
class UsersController extends Controller
{

    public function index(){
        return view('admin.user.index');
    }

    public function create(){
        return view('admin.user.add');
    }

    protected function store(AddUserRequestAdmin $request,User $user)
    {
         $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/adminpanel/users');
    }

    public function edit($id )
    {
        $user =User::find($id);
       return  view('admin.user.edit',compact('user'));
    }
    public function update(Request $request, $id)
    {
        $input=$request->all();

        User::findOrFail($id)->update($input);
        

        return  redirect ()->back();
    }
    // for update the  passowrd  of  the  user  only
    public function UpdatePassword(Request $request,User $user)
    {
       
    $userUpdated=$user->find($request->user_id);
    //dd($userUpdated);
    $password=$request->password;
    //dd($request->password);
    $userUpdated->fill(['password'=>$password])->save();
    return redirect ()->back();
}

public function destroy($id)
{
    // dd($id);
    User::findOrFail($id)->delete();
    return  redirect('/adminpanel/users');
}


public function anyData(User $user)
{

  $users = $user->all();

    return DataTables::of($users)

        ->editColumn('name', function ($model) {
            
            return \Html::link('/adminpanel/users/'.$model->id.'/edit',$model->name);

        })
        ->editColumn('admin', function ($model) {
            return $model->admin == "0" ? "عضو" : "مدير الموقع";
        })


        ->editColumn('mybu', function ($model) {
            
            
            return \Html::link('/adminpanel/bu/'.$model->id,"<span class='btn btn-danger btn-circle'> <i class='fa fa-link'></i> </span>"); 
        })
        
        ->editColumn('control', function ($model) {
            $all = \Html::link('/adminpanel/users/'.$model->id. '/edit','edit',array('class'=>'btn btn-success btn-circle'));
            
            return $all;
        })
        ->editColumn('control2', function ($model) {
            $all2="";
            if($model->id != 1){

                
                 $all2 = \Html::link('/adminpanel/users/'.$model->id.'/delete','delete',array('class'=>'btn btn-danger btn-circle'));
            }
            
            return $all2;
        })
        
        ->make(true);

}
}
