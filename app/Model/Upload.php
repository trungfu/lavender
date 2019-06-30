<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Upload
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Upload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Upload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Upload query()
 * @mixin \Eloquent
 */
class Upload extends Model
{
    protected $fillable = [
        'path',
        'type',
        'user_id'
    ];
}
