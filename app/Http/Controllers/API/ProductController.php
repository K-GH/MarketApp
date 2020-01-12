<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Shop;
use App\Product;
use  Validator ;

class ProductController extends BaseController
{


   
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

	

}
