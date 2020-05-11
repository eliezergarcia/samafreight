<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $guarded = [
        'created_at', 'updated_at', 'unit_number', 'unit_plates', 'trailer_plates', 'points_inspection', 'trailer_number'
    ];
}
