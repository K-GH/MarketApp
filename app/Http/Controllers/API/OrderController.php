<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;

use App\Shop;
use App\Product;
use App\ProductsOrder;
use App\Order;
use App\User;
use  Validator ;

class OrderController extends BaseController
{

/*
   
    public function showProduct(Request $request)
    {
             $shopIdValid=Validator::make($request->all(),[
                'id'=>'required',
            ]);
             if ($shopIdValid->fails()) 
             {
                       return $this->sendError($shopIdValid->errors());
             }
       
         //if message is arabic
         if ($this->acceptLanguage('ar')) 
          {
            $products=Product::select('id','shop_id','name_ar','description_ar','price','gallery_id','logo')->where('shop_id',$request->get('id'))->get();

            return $this->sendResponse($products->toArray(), 'تم اظهار جميع المنتجات بهذا القسم');

          }

          //IF Message is English
            $products=Product::select('id','shop_id','name_en','description_en','price','gallery_id','logo')->where('shop_id',$request->get('id'))->get();

            return $this->sendResponse($products->toArray(), 'products are read successfuly');



    }
*/

    public function store(Request $request)
    {

        $Validator=Validator::make($request->all(),[

            'product_id'=>'required',
            'product_quantity'=>'required',
            'shop_id'=>'required',
            'delivery_id'=>'required',
            'status'=>'required',
            'address'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',

        ]);



        $new_order=new Order();
        $new_order->shop_id=$request->get('shop_id');
        $new_order->user_id=Auth::user()->id;
        $new_order->delivery_id=$request->get('delivery_id');
        $new_order->status=$request->get('status');
        $new_order->address=$request->get('address');
        $new_order->latitude=$request->get('latitude');
        $new_order->longitude=$request->get('longitude');
        $new_order->save();


        $last_order=Order::select('id')->latest()->first();

        $new_brdige_order=new ProductsOrder();
        $new_brdige_order->order_id=$last_order->id; 
        $new_brdige_order->product_id=$request->get('product_id');
        $new_brdige_order->product_quantity=$request->get('product_quantity');
        $new_brdige_order->save();


           //if message is arabic
         if ($this->acceptLanguage('ar')) 
          {
            return $this->sendResponse($new_order->toArray(),'الطلب فى الطريق اليك');
          }

          //IF Message is English
            return $this->sendResponse($new_order->toArray(), 'Order on your way ');


    }

    

}
