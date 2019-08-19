<?php

namespace App\Model\Resource;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Upload
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Resource\Upload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Resource\Upload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Resource\Upload query()
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
