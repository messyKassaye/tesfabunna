<?php

namespace App\Api\V1\Controllers;

use Config;
use App\User;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\SignUpRequest;
use Auth;

class SignUpController extends Controller
{
    public function signUp(SignUpRequest $request, JWTAuth $JWTAuth)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->profile = 'letter';
        $user->password = $request->password;
        $user->coupon_number = $this->generateCouponCode(3);
        $userCheck = User::where('email', $request->email)->get();
        $phoneChecker = User::where('phone', $request->phone)->get();
        if (count($userCheck) <= 0 && count($phoneChecker) <= 0) {
            if ($user->save()){
                return response()->json([
                    'status' => true,
                    'user'=>$user,
                ], 201);
            }else{
                return response()->json(['status'=>false,'message'=>'Something is no wright']);
            }
        }else{
            if(count($userCheck)>0){
                return response()->json(['status'=>false,'message'=>'Some one registered by this email address']);
            }else{
                return response()->json(['status'=>false,'message'=>'Some one registered by this phone number']);

            }
        }


    }

    function generateCouponCode($length = 3)
    {
        $chars = '0123456789';
        $ret = '';
        for ($i = 0; $i <= $length; ++$i) {
            $random = str_shuffle($chars);
            $ret .= $random[0];
        }
        return $ret;
    }
}
