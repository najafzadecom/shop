<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function($data) {
                return [
                    'id'                => $data->id
                ];
            }),
            'meta' => [
                'count' => $this->collection->count()
            ]
        ];
    }

    /**
     * @param  Request  $request
     * @return array
     */

    public function with($request): array
    {
        return [
            'status'    => 200
        ];
    }
}
