<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Car extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'price' => $this->price,
            'img_url' => $this->img_url,
            'description_text' => $this->description_text,
            'color_id' => $this->color_id,
            'model_id' => $this->model_id,
            'series' => $this->series
        ];
    }
}
