<?php


namespace App\Repositories\Upload;


use App\Model\Upload;
use App\Repositories\AbstractRepository;

class UploadRepository extends AbstractRepository implements UploadRepositoryInterface
{

    public function __construct(Upload $upload)
    {
        parent::__construct($upload);
    }

    public function pop($id, $columns = ['*'])
    {
        $upload = Upload::find($id, $columns);

        $upload_data = $upload->toArray();

        try {
            $upload->delete();
        } catch (\Exception $e) {

        }

        return $upload_data;
    }
}