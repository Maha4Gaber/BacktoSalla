<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name' => $this->name,
            'decs' => $this->decs,
            'img' => $this->img,
            'price' => $this->price,
            'star' => $this->star,
            'cats_id' => $this->cats_id,
            'quantity' => $this->quantity,
            'paragraph' => $this->paragraph,
            'color' => $this->color,
            'wire' => $this->wire,
            'brand' => $this->brand,
            'model' => $this->model,
            'dimn' => $this->dimn,
            'sim' => $this->sim,
            'metal' => $this->metal,
            'weight' => $this->weight,
        ];
    }
}
