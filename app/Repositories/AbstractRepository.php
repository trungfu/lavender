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

    public function find($id, array $columns = ['*'])
    {
        return $this->model->find($id);
    }

    public function all(array $columns = ['*'])
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function list(string $orderByColumn, $orderBy = 'desc', $with = [], $columns = ['*'])
    {
        return $this->model->with($with)
            ->orderBy($orderByColumn)
            ->get($columns);
    }

    public function update(array $data, string $id = 'id')
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function firstOrCreate(array $data)
    {
        return $this->model->firstOrCreate($data);
    }
}
