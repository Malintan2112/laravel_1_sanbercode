<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register (){
        return view('register');
    }
    public function welcome (Request $req){
        return view('welcome',['fname'=>$req->fname,'lname'=>$req->lname]);
    }
}
