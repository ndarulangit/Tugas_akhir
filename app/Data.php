<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = [
        'title', 'fingerprint', 'author', 'years', 'type','txxtt'
    ];
}
