<?php


namespace App\Http\Controllers\Api\Songs;


use App\Http\Controllers\Controller;
use App\Http\Resources\UploadTemporary as UploadTemporaryResource;
use App\Model\UploadTemporary;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    const SONG_TYPE = 1;

    public function upload(Request $request)
    {
        $uploadedSong = $request->file('song');

        $file_name = str_replace(' ', '-', \Str::ascii($uploadedSong->getClientOriginalName()));

        $path = $uploadedSong->storeAs('songs', $file_name, 'public');

        $user = $request->user('api');

        $song = UploadTemporary::create([
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

    public function getUploaded(Request $request)
    {
        return UploadTemporaryResource::collection(UploadTemporary::all());
    }
}