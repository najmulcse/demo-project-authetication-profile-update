<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

class ProfileResource extends JsonResource
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
            'name' => $this->name,
            'user_name' => $this->user_name,
            'email' => $this->email,
            'avatar' =>  URL::to('') .'/storage/'. (!is_null($this->avatar) ?  $this->avatar : 'default.png'),
            'user_role' => $this->user_role,
            'register_at' => $this->register_at,
        ];
    }
}
