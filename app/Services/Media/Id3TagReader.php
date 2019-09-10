<?php


namespace App\Services\Media;


class Id3TagReader
{
    protected $getID3;

    protected $songInfo;

    public function __construct(
        \getID3 $getID3
    )
    {
        $this->getID3 = $getID3;
    }

    public function analyze($filePath)
    {
        $this->songInfo = $this->getID3->analyze($filePath);
        return $this;
    }

    public function getSongTitle() {
        return $this->songInfo['tags']['id3v2']['title'][0] ?? pathinfo($this->songInfo['filename'])['filename'];
    }

    public function getSongAlbum() {
        return $this->songInfo['tags']['id3v2']['album'][0] ?? null;
    }

    public function getSongArtist()
    {
        return $this->songInfo['tags']['id3v2']['artist'][0] ?? null;
    }

    public function getSongGenre()
    {
        return $this->songInfo['tags']['id3v2']['genre'][0] ?? null;
    }

    public function getSongPath()
    {
        return $this->songInfo['filenamepath'];
    }

    public function getPlayTime()
    {
        return $this->songInfo['playtime_seconds'];
    }
}
