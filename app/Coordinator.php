<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    use GeneralFunctions;

    protected $guarded = [
        'created_at', 'updated_at'
    ];
}
