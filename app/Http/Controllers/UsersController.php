<?php

namespace App\Http\Controllers;
use  App\User;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequestAdmin;
class UsersController extends Controller
{

    public function index(User $user){
        $user=$user->all();
        return view('admin.user.index',compact('user'));
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
        $userUpdated=User::find($id);
        // dd($userUpdated);
        $userUpdated->fill($request->all())->save();

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
}
