<?php


namespace App\Repositories;


interface RepositoryInterface
{
    public function find($id, array $columns = ['*']);
    public function all(array $columns = ['*']);
    public function list(string $orderByColumn, $orderBy = 'desc', $with = [], $columns = ['*']);
    public function create(array $data);
    public function update(array $data, string $id = 'id');
    public function delete($id);
    public function firstOrCreate(array $data);
}
