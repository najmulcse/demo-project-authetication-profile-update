<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name ?? '',
            'user_name' => $this->user_name ?? '',
            'email' => $this->email,
            'user_role' => $this->user_role,
            'avatar' => URL::to('') .'/storage/'. (!is_null($this->avatar) ?  $this->avatar : 'default.png'),
        ];
    }
}
