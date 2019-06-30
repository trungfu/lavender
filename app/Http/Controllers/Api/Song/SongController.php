<?php

namespace App\Http\Controllers\Api\Song;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SongRequest;
use App\Http\Resources\Song as SongResource;
use App\Repositories\Song\SongRepositoryInterface;
use App\Repositories\Upload\UploadRepositoryInterface;
use Illuminate\Http\Request;

class SongController extends Controller
{
    protected $songRepository;
    protected $uploadRepository;

    public function __construct(
        SongRepositoryInterface $songRepository,
        UploadRepositoryInterface $uploadRepository
    )
    {
        $this->songRepository = $songRepository;
        $this->uploadRepository = $uploadRepository;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return SongResource
     */
    public function store(SongRequest $request)
    {
        $postData = $request->all();

        $path = $this->uploadRepository->pop($postData['selected_upload'], ['id', 'path'])['path'];

        $postData['source'] = $path;

        $song = $this->songRepository->persist($postData);

        return new SongResource($song);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
