<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfileResource;
use App\Models\User;
use App\Traits\FileProcessingTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfileApiController extends Controller
{
    use FileProcessingTrait;

    public function update(Request  $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'name' => 'sometimes|string|max:255',
            'user_name' => 'sometimes|string|min:4|max:20',
            'avatar' => 'sometimes|mimes:jpeg,jpg,png,gif|max:100000|dimensions:width=256,height=256',

        ]);
        if ($validator->fails()) {
            return appApiResponse(422,"The given data was invalid.", $validator->errors());
        }
        $user = User::where('email', $request->email)->whereStatus(true)->first();

        if(!$user){
            return appApiResponse(200, 'User not found',null,[]);
        }
        try{

            $user->update($request->only(['name','user_name']));
            if($request->hasFile('avatar')){
                $fileName = $this->processSingle($request, 'avatar', 'uploads/users');
                $user->avatar = $fileName;
                $user->save();
            }

            return appApiResponse(200, 'Profile updated successfully.',null,new ProfileResource($user));
        }catch (\Exception $exception){
            Log::error($exception);
            return appApiResponse(500, 'Something went wrong');
        }
    }


}
