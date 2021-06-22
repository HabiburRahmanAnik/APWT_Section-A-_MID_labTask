<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;
use Validator;

class LoginController extends Controller {
    public function index() {
        return view( 'login' );
    }

    public function verify( LoginRequest $req ) {
        $result = DB::table( 'users' )
            ->where( 'username', $req->email )
            ->where( 'password', $req->password )
            ->get();

        if ( count( $result ) > 0 ) {
            $req->session()->put( 'uname', $req->uname );
            return redirect( '/home' );
        } else {
            $req->session()->flash( 'msg', 'Invalid username or password!' );
            return redirect( '/login' );
        }

    }
}
