<?php


namespace App\Repositories;


interface RepositoryInterface
{
    public function find($id);
    public function all();
    public function filter($condition);
    public function persist($data);
}