<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [

            'id'=>$this->id,

            'corporate_name'=>$this->corporate_name,

            'trade_name'=>$this->trade_name,

            'document'=>$this->document,

            'email'=>$this->email,

            'phone'=>$this->phone,

            'city'=>$this->city,

            'state'=>$this->state,

            'created_at'=>$this->created_at,
        ];
    }
}