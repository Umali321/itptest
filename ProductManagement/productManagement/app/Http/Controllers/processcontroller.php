<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RawMaterial;
use App\machine;
use App\productModel;
use App\Orders;
use DB;
class processcontroller extends Controller
{
    public function processdata($id){
     

        //$productModel = productModel::find($id);
      
        $pr = DB::table('product_models')
            ->join('Orders', 'product_models.id', '=', 'Orders.ModelID')
            //->join('productModel', 'users.id', '=', 'orders.user_id')
            ->select('product_models.Material1', 'product_models.Material2','product_models.Material3','product_models.Material4','Orders.Qty')
            ->where('product_models.id',$id);
           // ->first();
    
        return view('process', ['product_models'=>$pr]);
        
    }

 
}
