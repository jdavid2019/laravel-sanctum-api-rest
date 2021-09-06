<?php

namespace App\Http\Resources\V2;

use App\Http\Resources\V2\PostResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' =>  $this->collection,
            'meta' => [
                'organization' => 'Joseph Home Organization',
                'author' => [
                    'name' => 'Joseph David',
                    'age' => '23'
                ]
            ],
            'type' => 'articles'
        ];
    }
}
