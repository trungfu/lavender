<?php


namespace App\Http\Controllers\Api\Songs;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function execute(Request $request)
    {
        $input = $request->all();
        var_dump($input);
        die('test');
    }
}