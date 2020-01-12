<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class BaseController extends Controller
{
    //
	public function sendResponse($result,$message)
	{
			$response =[

				'status'=>true,
				'data'=>$result,
				'message'=>$message

			];

			return response()->json($response,200);

	}


	public function sendError($error,$errorMessage=[])
	{
			$response =[

				'status'=>false,
				'data'=>$errorMessage,
				'message'=>$error
			];


			return response()->json($response);

	}

	public function acceptLanguage($locale)
	{


		if ($locale==locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']))
		{
			
			return true;
		}

		return false;
		    
	}
}

