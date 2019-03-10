<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($request)
    {
       // return parent::toArray($request);

       return [
        'id' => $this->id,
        'title' => $this->title,
        'body' => $this->body,
        'image' => $this->image,
        'created_at' => (string) $this->created_at,
        'updated_at' => (string) $this->updated_at,
    ];
    }
}
