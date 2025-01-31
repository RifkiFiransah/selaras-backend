<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'deskripsi' => $this->deskripsi,
            'harga' => $this->harga,
            'stock' => $this->stock,
            'slug' => $this->slug,
            'gambar' => $this->gambar,
            'mitra' => new MitraResource($this->whenLoaded('mitra')),
            'catalog' => new CatalogResource($this->whenLoaded('catalog')),
        ];
    }
}
