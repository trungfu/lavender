<?php


namespace App\Api;


interface SongRepositoryInterface
{
    public function persist($data);
}