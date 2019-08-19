<?php


namespace App\Model\Resource;


use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['title'];

    public function songs()
    {
        return $this->belongsToMany(Song::class)->withTimestamps();
    }
}
