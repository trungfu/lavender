<?php


namespace App\Services\Media;


use App\Model\SongFile;
use Illuminate\Support\Facades\File;

class SongsSync
{
    private $songFile;

    public function __construct(
        SongFile $songFile
    )
    {
        $this->songFile = $songFile;
    }

    public function sync()
    {
        $songFiles = File::files('/home/viettrung/Music/');

        foreach ($songFiles as $songFile) {
            $this->songFile->setFilePath($songFile->getPathname())->sync();

        }
    }

}
