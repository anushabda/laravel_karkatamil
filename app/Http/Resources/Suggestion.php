<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Suggestion extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        $imagefirst=$this->basics->first();
       // $image=$imagefirst['image']??'noimage';
       $image=$imagefirst['image']??null;
       
        return[
            'id'=>$this->id,
            'category_name'=>$this->category_name,
            'category_english'=>$this->category_english,
            'image'=>$image,
          // 'image'=>$imagefirst['image'],
            
        ];
    }
}
