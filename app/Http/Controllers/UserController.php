<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function userData(Request $req){
        $data= $req->input('user');
        session()->put('user',$data);
        return redirect('prof');
    }
}