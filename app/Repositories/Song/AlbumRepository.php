<?php


namespace App\Repositories\Song;


use App\Model\Resource\Album;
use App\Repositories\AbstractRepository;

class AlbumRepository extends AbstractRepository implements AlbumRepositoryInterface
{
    public function __construct(Album $album)
    {
        parent::__construct($album);
    }
}
