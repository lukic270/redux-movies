<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'title' => $this->title,
            'director' => $this->director,
            'image' => $this->image,
            'duration' => $this->duration,
            'releaseDate' => $this->releaseDate,
            'genre' => $this->genre
        ];
    }
}
