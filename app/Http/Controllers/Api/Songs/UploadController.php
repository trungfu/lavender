<?php


namespace App\Http\Controllers\Api\Songs;


use App\Http\Controllers\Controller;
use App\Model\UploadTemporary;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function execute(Request $request)
    {
        $uploadedSong = $request->file('song');

        $file_name = str_replace(' ', '-', \Str::ascii($uploadedSong->getClientOriginalName()));

        $path = $uploadedSong->storeAs('songs', $file_name, 'public');

        $user = $request->getUser();

        UploadTemporary::create([
            'path' => $path,
            'disk' => 'public',
            'user_id' => $user->id
        ]);
    }
}