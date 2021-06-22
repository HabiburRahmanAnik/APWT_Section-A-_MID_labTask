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
            ->where( 'email', $req->email )
            ->where( 'password', $req->password )
            ->get();

        foreach($result as $entity){
            $uname = $entity->username;
            $type=$entity->type;
        }

        if ( (count( $result ) > 0 ) && $type == "admin") {
            $req->session()->put( 'uname', $uname );
            return redirect( )->route('admin.index');
        } elseif((count( $result ) > 0 ) && $type == "customer"){
            return \redirect()->route('customer.index');
        } elseif((count( $result ) > 0 ) && $type == "accoutant"){
            return \redirect()->route('accountant.index');
        }else {
            $req->session()->flash( 'msg', 'Invalid username or password!' );
            return redirect( '/login' );
        }

    }
}
