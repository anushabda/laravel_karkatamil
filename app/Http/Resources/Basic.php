<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Basic extends JsonResource
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
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'image'=>$this->image,
            'extrainfo'=>$this->extrainfo,
            'translation'=>$this->translation,
            'audio'=>$this->audio,
            'categorytamil'=>$this->category->category_name,
        ];
    }
}
