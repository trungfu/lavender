<?php


namespace App\Repositories\Upload;


use App\Model\Upload;
use App\Repositories\AbstractRepository;

class UploadRepository extends AbstractRepository implements UploadRepositoryInterface
{

    public function find($id)
    {
        // TODO: Implement find() method.
    }

    public function persist($data)
    {
        // TODO: Implement persist() method.
    }

    public function pop($id, $columns = ['*'])
    {
        $upload = Upload::find($id, $columns);

        $uploadData = $upload->toArray();

        try {
            $upload->delete();
        } catch (\Exception $e) {

        }

        return $uploadData;
    }
}