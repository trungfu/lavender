<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Upload extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'uid'     => $this->id,
            'name'    => $this->path,
            'path'    => $this->path,
            'status'  => 'done',
            'type'    => $this->type,
            'user_id' => $this->user_id,
            'url'     => '#'
        ];
    }
}
