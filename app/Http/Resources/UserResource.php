<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;


class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
 


   public function calculate_age($date) {
    $date = new \Carbon\Carbon($date);
    return (int) $date->diffInYears();
    }

 


    public function toArray($request)
    {
         return [
              'age[from]' =>$this->calculate_age(optional($this->info)->date_of_birth),
              'age[to]' =>$this->calculate_age(optional($this->info)->date_of_birth),
              'gender' => optional($this->info)->gender,
              'hobby' => optional($this->info)->hobby,
          
        ];
    }
}
