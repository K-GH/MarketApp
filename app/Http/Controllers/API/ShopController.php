<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Category;
use App\Shop;
use  Validator ;

class ShopController extends BaseController
{

   
    public function showShop(Request $request)
    {
    	     $catIdValid=Validator::make($request->all(),[
                'id'=>'required',
            ]);
		     if ($catIdValid->fails()) 
		     {
		               return $this->sendError($catIdValid->errors());
		     }
       
         //if message is arabic
    	 if ($this->acceptLanguage('ar')) 
          {
	    	$shops=Shop::select('id','cat_id','name_ar','image','services_id','work_days','work_hours','social_id')->where('cat_id',$request->get('id'))->get();

	    	return $this->sendResponse($shops->toArray(), 'تم اظهار كل المصنفات بنجاح');

          }

          //IF Message is English
  	    	$shops=Shop::select('id','cat_id','name_en','image','services_id','work_days','work_hours','social_id')->where('cat_id',$request->get('id'))->get();

	    	return $this->sendResponse($shops->toArray(), 'shops are read successfuly');



    }

	

}
