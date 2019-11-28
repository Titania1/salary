<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Holiday extends Model
{

    use SoftDeletes;

    protected $table = 'holidays';

    protected $fillable = [
        'date'
    ];

}
