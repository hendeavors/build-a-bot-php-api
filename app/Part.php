<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $table = 'parts';

    protected $casts = [
        'onSale' => 'boolean',
    ];
}
