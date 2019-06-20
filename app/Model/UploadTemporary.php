<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UploadTemporary extends Model
{
    protected $fillable = [
        'path',
        'type',
        'user_id'
    ];
}
