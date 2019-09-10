<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Song extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);

        return [
            'id'     => $this->id,
            'title'  => $this->title,
            'lyric'  => $this->lyric,
            'length' => $this->length,
            'link'   => route('api.songs.link', ['id' => $this->id]),
        ];
    }
}
