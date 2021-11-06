<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginApiController extends Controller
{
    public function login(Request $request)
    {

        try {
            $validator = \Validator::make($request->all(), [
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);
            if ($validator->fails()) {
                return appApiResponse(422,"The given data was invalid.", $validator->errors());
            }
            $credentials = request(['email', 'password']);
            if (!Auth::attempt($credentials)){
                return appApiResponse(422, 'Email or Password Invalid');
            }
            $user = $request->user();
            if (!$user->is_otp_verified) {
                return appApiResponse(401, 'Signup incomplete! Please verify your email to login');
            }

            $tokenResult = $user->createToken('Personal Access Token');

            $token = $tokenResult->token;
            $user->access_token = $tokenResult->accessToken;
            $user->save();
            if ($request->remember_me){
                $token->expires_at = Carbon::now()->addWeeks(1);
            }
            $token->save();

            return appApiResponse(200, 'Login successful',null,
                    [
                        'access_token' => $user->access_token,
                        'user' => new UserResource($user)
                    ]
            );

        } catch (\Exception $e) {
            \Log::error($e);
            return appApiResponse(500, 'Something went wrong');
        }
    }

    public function logout(Request $request)
    {

        try {
            $user = auth()->user();
            $user->access_token = null;
            $user->save();
            $user->token()->revoke();
            return appApiResponse(200, 'Successfully logged out');
        } catch (\Exception $e) {
            \Log::error($e);
            return appApiResponse(500, 'Something went wrong');
        }
    }

}
