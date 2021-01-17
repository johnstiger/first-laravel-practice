<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class utang extends Model
{
    protected $table = "palautang";
    protected $fillable = [
        'name','amount'
    ];
}
