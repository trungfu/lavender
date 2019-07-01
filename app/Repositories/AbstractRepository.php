<?php


namespace App\Repositories;


use Illuminate\Database\Eloquent\Model;

class AbstractRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function find($id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function filter($condition)
    {
        // TODO: Implement filter() method.
    }

    public function persist($data)
    {
        return $this->model->create($data);
    }
}