<?php

namespace App\Model\Resource;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Song
 *Resource\
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Resource\Song newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Resource\Song newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Resource\Song query()
 * @mixin \Eloquent
 */
class Song extends Model
{
    protected $fillable = [
        'id', 'title', 'source', 'lyric'
    ];

    public $incrementing = false;

    public function albums()
    {
        return $this->belongsToMany(Album::class)->withTimestamps();
    }
}
