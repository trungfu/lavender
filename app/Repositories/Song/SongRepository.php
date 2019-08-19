<?php


namespace App\Repositories\Song;


use App\Model\Resource\Song;
use App\Repositories\AbstractRepository;

class SongRepository extends AbstractRepository implements SongRepositoryInterface
{
    public function __construct(Song $song)
    {
        parent::__construct($song);
    }
}
