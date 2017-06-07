<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //Usar para o sftdelete. O laravel já faz tudo!

class AccessCount extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'ip',
        'numberofaccess'
    ];
}
