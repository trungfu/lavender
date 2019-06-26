<?php


namespace App\Repositories;


use App\Api\SongRepositoryInterface;
use App\Model\Song;

class SongRepository implements SongRepositoryInterface
{

    public function persist($data)
    {
        return Song::create($data);
    }
}