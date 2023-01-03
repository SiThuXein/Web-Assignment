<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
   
    public function index(){
        return view("login");
    }

    public function login(){
        $email = request()->email;
        $password = request()->password;

        $User = User::all();
        foreach($User as $user){
            if($email==$user->email && $password==$user->password){
                return redirect("/admin/dashboard");
            }
            else{
                return redirect("/admin");;
            }
        }


    }
}
