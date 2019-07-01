<?php


namespace App\Http\Controllers\Api\Song;


use App\Http\Controllers\Controller;
use App\Http\Resources\Upload as UploadResource;
use App\Model\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    const SONG_TYPE = 1;

    public function upload(Request $request)
    {
        $uploaded_song = $request->file('song');

        $file_name = str_replace(' ', '-', \Str::ascii($uploaded_song->getClientOriginalName()));

        $path = $uploaded_song->storeAs('songs', $file_name, 'public');

        $user = $request->user('api');

        $song = Upload::create([
            'path'    => $path,
            'type'    => self::SONG_TYPE,
            'user_id' => $user->id
        ]);

        return response()->json([
            'uid' => $song->id,
            'name' => $song->path,
            'status' => 'done',
            'response' => [
                'status' => 'success'
            ]
        ]);
    }

}