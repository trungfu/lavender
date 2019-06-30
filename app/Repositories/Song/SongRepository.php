<?php


namespace App\Repositories\Song;


use App\Model\Song;
use App\Repositories\AbstractRepository;

class SongRepository extends AbstractRepository implements SongRepositoryInterface
{

    public function find($id)
    {
        return Song::find($id);
    }

    public function persist($data)
    {
        return Song::create($data);
    }
}