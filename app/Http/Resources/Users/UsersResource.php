<?php

namespace App\Http\Resources\Users;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UsersResource extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => UserResource::collection($this->collection),
            'meta' => [
                'count' => $this->collection->count()
            ],
        ];
    }
}
