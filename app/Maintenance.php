<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $guarded = [
        'created_at', 'updated_at', 'point_truck', 'point_trailer', 'trailer_number'
    ];

    public function points()
    {
    	
    }

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
        return $this->belongsTo(Coordinator::class, 'firm_coordinator');
    }

    public function conductor(){
        return $this->belongsTo(Driver::class, 'firm_conductor');
    }

    public function mechanic(){
        return $this->belongsTo(Mechanic::class, 'firm_mechanic');
    }
}
