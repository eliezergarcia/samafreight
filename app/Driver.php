<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use GeneralFunctions;

    protected $guarded = [
        'created_at', 'updated_at'
    ];
}
