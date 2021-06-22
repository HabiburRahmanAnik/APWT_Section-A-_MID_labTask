<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel;
use Illuminate\Support\Facades\DB;
use Validator;

class ProductController extends Controller
{
    public function addProductView(){
        $vendor = DB::table('vendor')->get();
        return \view('admin.addProduct')->with('vendorName',$vendor);
    }

    public function addProduct(Request $req){
        DB::table('products')->insert([
            'productName' =>$req->product_name,
            'category'=>$req->catagory,
            'unitPrice'=>$req->price,
            'status'=>$req->status,
            'vendor_id'=>$req->vendor_id,
            'lastUpdate'=>date('Y-m-d H:i:s'),
        ]);
        
    }
}
