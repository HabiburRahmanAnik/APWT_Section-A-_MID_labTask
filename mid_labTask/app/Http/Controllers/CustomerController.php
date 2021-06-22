<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $req){
        $uname = $req->session()->get('uname');
        return view('customer.customerDashboard')->with('uname',$uname);
    }
}
