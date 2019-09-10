<?php


namespace App\Model;


use App\Repositories\Song\AlbumRepositoryInterface;
use App\Repositories\Song\SongRepositoryInterface;
use App\Services\Media\Id3TagReader;

class SongFile
{
    protected $filePath;
    protected $songRepository;
    protected $id3TagReader;
    protected $albumRepository;

    public function __construct(
        SongRepositoryInterface $songRepository,
        Id3TagReader $id3TagReader,
        AlbumRepositoryInterface $albumRepository
    )
    {
        $this->songRepository = $songRepository;
        $this->id3TagReader = $id3TagReader;
        $this->albumRepository = $albumRepository;
    }

    public function setFilePath($filePath)
    {
        $this->filePath = $filePath;
        return $this;
    }

    public function sync()
    {
        if(!$this->isSynced()) {
            $this->id3TagReader->analyze($this->filePath);

            /** @var \App\Model\Resource\Song $song */
            $song = $this->songRepository->create([
                'id'     => self::getSongId($this->filePath),
                'title'  => $this->id3TagReader->getSongTitle(),
                'source' => $this->id3TagReader->getSongPath(),
                'length' => $this->id3TagReader->getPlayTime(),
            ]);

            if(!empty($this->id3TagReader->getSongAlbum())) {
                /** @var \App\Model\Resource\Album $song */
                $album = $this->albumRepository->firstOrCreate([
                    'title' => $this->id3TagReader->getSongAlbum()
                ]);

                $song->albums()->attach($album->id);
            }

        }
    }

    public function isSynced()
    {
        return !empty($this->songRepository->find(self::getSongId($this->filePath)));
    }

    public static function getSongId($songIdentify)
    {
        return md5($songIdentify);
    }
}
