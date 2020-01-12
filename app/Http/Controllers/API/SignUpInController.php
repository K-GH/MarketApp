<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use App\Phone;
use JWTFactory;
use JWTAuth;
use Validator;
use Response;

class SignUpInController extends BaseController
{
    //
   
    public function login(Request $request)
    {

     $validator =Validator::make($request->all(),[

      'email'=>'required|string|email|max:255',
      'password'=>'required',
      'user_type'=>'required|string'

      ]);

     if ($validator->fails()) 
     {
               return $this->sendError($validator->errors());
     }

     $credentials= $request->only('email','password','user_type');

     try 
     {
      if (! $token =JWTAuth::attempt($credentials))
      {
       
                 return $this->sendError('invalid username or password');
      }

     }catch(JWTException $e)
     { 
            return $this->sendError('could not create token',500);
     }

          
         $user_id=Auth::user()->id;

        if ($this->acceptLanguage('ar'))
         {
            return $this->sendResponse(compact('token','user_id'), 'تم الدخول بنجاح');
           
         }

        return $this->sendResponse(compact('token','user_id'), 'login is successfuly');

    }


    public function register(Request $request)
        {

            $validator =Validator::make($request->all(),[

                'firstName'=>'required',
                'lastName'=>'required',
                'email'=>'required|string|email|max:255|unique:users',
                'password'=>'required|min:8',
                'phone'=>'required',
                ]);


            $phoneValid=Validator::make($request->all(),[
                'phone'=>'required|unique:phones',
            ]);


            if ($phoneValid->fails()) {
               return $this->sendError($phoneValid->errors());
            }

            //create new user and phone 
            $user =new User();
            $user->firstName=$request->get('firstName');
            $user->lastName=$request->get('lastName');
            $user->user_type='normal user';
            $user->email=$request->get('email');
            $user->password=bcrypt($request->get('password'));
            $user->save();

            auth()->login($user);

            $phone=new Phone;
            $phone->user_id = Auth::user()->id;
            $phone->phone=$request->get('phone');
            $phone->save();

            //$user=User::first();
           // $token = JWTAuth::fromUser($user);
           // return $this->sendResponse(compact('token'), 'SignUp is successfuly');
   

            if ($this->acceptLanguage('ar')) 
            {
                return $this->sendResponse($user->toArray(), 'تم العملية بنجاح');

            }
           
          return $this->sendResponse($user->toArray(), 'SignUp is successfuly');

    
        }

}
