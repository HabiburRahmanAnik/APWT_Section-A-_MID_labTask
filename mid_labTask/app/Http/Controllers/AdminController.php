<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {
    public function index() {
        return view( 'admin.adminDashboard' );
    }

    public function addIndex() {
        return view( 'admin.addUser' );
    }

    public function addUser( Request $req ) {
        DB::table( 'users' )->insert( [
            'name'        => $req->name,
            'username'    => $req->username,
            'email'       => $req->email,
            'password'    => $req->password,
            'type'        => $req->type,
            'city'        => '',
            'country'     => '',
            'companyName' => '',
            'phone'       => '',
        ] );
    }

    public function userlist() {
        $users = DB::table( 'users' )->get();
        return \view( 'admin.userList' )->with( 'userlist', $users );
    }

    public function delete( $id ) {
        DB::table( 'users' )->where( 'id', $id )->delete();
        return \redirect()->route( 'admin.userlist' );
    }

    public function edit( $id ) {
        $user = DB::table( 'users' )->find( $id );
        return \view( 'admin.editUser' )->with( 'user', $user );
    }
    public function update( Request $req, $id ) {
        DB::table( 'users' )
            ->where( 'id', $id )
            ->update( [
                'name'     => $req->name,
                'username' => $req->username,
                'email'    => $req->email,
                'phone'    => $req->phone,
            ] );

        return redirect()->route('admin.userlist');
    }
}
