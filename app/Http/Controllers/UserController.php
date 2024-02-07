<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello From UserController';
    }



    public function show($id){

        return view('user')
        ->with('name', 'Jake Russel')
        ->with('age', 22)
        ->with('email', 'jakemerlin@gmail.com')
        ->with('id', $id);
    }
}
