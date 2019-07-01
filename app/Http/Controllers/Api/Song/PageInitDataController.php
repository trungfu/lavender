<?php

namespace App\Http\Controllers\Api\Song;

use App\Http\Controllers\Controller;
use App\Repositories\Upload\UploadRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Resources\Upload as UploadResource;

class PageInitDataController extends Controller
{

    protected $upload_repository;

    public function __construct(
        UploadRepositoryInterface $upload_repository
    )
    {
        $this->upload_repository = $upload_repository;
    }

    public function createSongInitData(Request $request)
    {
        $uploaded_files = UploadResource::collection($this->upload_repository->all())->toArray($request);

        $data = [
            'uploaded_files' => $uploaded_files,
        ];

        return $data;
    }
}
