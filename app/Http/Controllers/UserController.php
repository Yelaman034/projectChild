<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req){
        //return $req->input();

        //return User::where(['email'=>$req->email])->first();
       $user =  User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return 'Хэрэглэгчийн нэр эсвэл нууц үг буруу байна!';
        }else{
            $req->session()->put('user',$user);
            return redirect('/children');
        }
    

    }
    function register(Request $req){
        //Оруулсан өгөгдлийг авах
        //return $req->input();
        $user = new User;
        $user->surname = $req->surname;
        $user->fullname = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/log');
    }
}
