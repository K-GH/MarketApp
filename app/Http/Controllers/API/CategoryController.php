<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Category;
use  Validator ;

class CategoryController extends BaseController
{
    //
    public function index()
    {

        if ($this->acceptLanguage('ar')) 
          {
             $Categories=Category::select('id','name_ar','image')->get();
             return $this->sendResponse($Categories->toArray(), 'تم اظهار كل المصنفات بنجاح');

          }
          
        $Categories=Category::select('id','name_en','image')->get();
        return $this->sendResponse($Categories->toArray(), 'Categories  are read successfuly');
       
    }


    


    public function show($id)
    {
  
    	$Categories=Category::find($id);
    	if (is_null($Categories)) 
    	{
    		return $this->sendError('Category is not found');

    	}

    	return $this->sendResponse($Categories->toArray(), 'Category is found successfuly');

    }

	

}
