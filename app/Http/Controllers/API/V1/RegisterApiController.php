<?php

namespace App\Http\Controllers\API\V1;


use App\Http\Controllers\Controller;
use App\Mail\UserEmailConfirmationMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class RegisterApiController extends Controller
{
    public function __construct()
    {

    }

    public function generateInvitationLink(Request  $request)
    {
        $validator = \Validator::make($request->all(), [
            'invite_from' => 'sometimes|in:web,app',
        ]);
        if ($validator->fails()) {
            return appApiResponse(422,"The given data was invalid.", $validator->errors());
        }
        try{
            $data['register_url'] = route('api.signup') . '?invite_from='. $request->invite_from;
            return appApiResponse(200, 'Successfully invitation link generated',null,$data);
        }catch (\Exception $exception){
            Log::error($exception);
            return appApiResponse(500, 'Something went wrong');
        }
    }
    public function signup(Request  $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'invite_from' => 'sometimes|string',
        ]);
        if ($validator->fails()) {
            return appApiResponse(422,"The given data was invalid.", $validator->errors());
        }
        try{
            $data = array();

            $otp = rand(10000000,99999999);
            $user = User::create((array_merge($request->only(['email','password']),['otp' => $otp])));
            $this->userConfirmationMailSend($user);
            return appApiResponse(200, 'OTP sent to your email. Please verify your email.',null,$data);
        }catch (\Exception $exception){
            Log::error($exception);
            return appApiResponse(500, 'Something went wrong');
        }
    }
    public function verifyOtp(Request  $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|string|email|exists:users',
            'otp' => 'required|string|min:8|max:8',

        ]);
        if ($validator->fails()) {
            return appApiResponse(422,"The given data was invalid.", $validator->errors());
        }
        try{
            $data = array();
            $user = User::where('email', $request->email)->where('otp', $request->otp)->first();
            if(!$user){
                return appApiResponse(422, 'OTP Mismatched',null,$data);
            }
            if($user->is_otp_verified){
                return appApiResponse(422, 'OTP already verified.',null,$data);
            }
            $user->is_otp_verified = true;
            $user->status = true;
            $user->register_at = Carbon::now()->format('Y-m-d H:i:s');
            $user->save();
            return appApiResponse(200, 'OTP verified successfully.',null,$data);
        }catch (\Exception $exception){
            Log::error($exception);
            return appApiResponse(500, 'Something went wrong');
        }
    }

    private  function userConfirmationMailSend($user, $subject = 'Email Confirmation')
        {

            if ($user->email != null) {
                $data['name'] = $user->name;
                $data['email'] = $user->email;

                $data['from'] = config('mail.send_email');
                $data['subject'] = $subject;
                $data['domain'] = config('app.url');
                $data['company'] = config('app.name');
                $data['otp'] = $user->otp;
                $data['mail_body'] = "You are just a few steps from setting up your profile. Please kindly verify your email by filling OTP";
               // dd($data);
                Mail::to($user->email)->send(new UserEmailConfirmationMail($data));

            }
        }
}
