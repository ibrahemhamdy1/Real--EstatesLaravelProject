<?php

namespace App\Http\Controllers;
use  App\User;
use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequestAdmin;
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
}
