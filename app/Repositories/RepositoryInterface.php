<?php


namespace App\Repositories;


interface RepositoryInterface
{
    public function find($id);
    public function persist($data);
}