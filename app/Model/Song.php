<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Song
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Song newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Song newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Song query()
 * @mixin \Eloquent
 */
class Song extends Model
{
    protected $fillable = [
        'title', 'source', 'lyric'
    ];

}
