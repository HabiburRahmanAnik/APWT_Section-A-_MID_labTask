<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountantController extends Controller
{
    public function index(Request $req){
        $uname = $req->session()->get('uname');
        return view('accountant.accountantDashboard')->with('uname',$uname);
    }
}
