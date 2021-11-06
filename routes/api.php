<?php

use App\Http\Controllers\API\V1\LoginApiController;
use App\Http\Controllers\API\V1\ProfileApiController;
use App\Http\Controllers\API\V1\RegisterApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function(){
    Route::get('generate-invitation-link', [RegisterApiController::class,'generateInvitationLink'])->name('api.generate.invitation.link');
    Route::post('signup', [RegisterApiController::class,'signup'])->name('api.signup');
    Route::post('verify-otp', [RegisterApiController::class,'verifyOtp'])->name('api.verifyOtp');
    Route::post('login', [LoginApiController::class,'login'])->name('api.login');
});

Route::group(['middleware' => 'auth:api', 'prefix'=>'v1','namespace'=>'API\V1'],function(){
    Route::post('update-profile',[ ProfileApiController::class,'update'])->name('api.update.profile');
    Route::get('logout',[ LoginApiController::class,'logout'])->name('api.logout');

});
