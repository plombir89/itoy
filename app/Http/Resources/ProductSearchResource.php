<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductSearchResource extends JsonResource
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
            'title' => $this->title,
            'image' => asset('storage/'. $this->parent->img),
            'url' => route('product.show', [session('lang_prefix'), $this->slug]),
            'price' => $this->parent->price,
            'discount' => $this->parent->discount
        ];
    }
}
