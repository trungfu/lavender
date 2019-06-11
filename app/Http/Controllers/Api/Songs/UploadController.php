<?php


namespace App\Http\Controllers\Api\Songs;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function execute(Request $request)
    {
        $uploadedSong = $request->file('song');

        $file_name = convertVnToEn($uploadedSong->getFilename());

        $uploadedSong->storeAs('songs', $file_name, 'public');
    }
}