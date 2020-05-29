<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    protected $guarded = [
        'created_at', 'updated_at', 'unit_number', 'unit_plates', 'trailer_plates', 'points_inspection', 'trailer_number', 'inspection_id'
    ];

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }

    public function box()
    {
        return $this->belongsTo(Box::class);
    }

    public function driver(){
        return $this->belongsTo(Driver::class);
    }

    public function coordinator(){
        return $this->belongsTo(Coordinator::class);
    }
}
