<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use GeneralFunctions;
    
    protected $guarded = [
        'id_box', 'created_at', 'updated_at'
    ];

    public function type()
    {
      return $this->belongsTo(Type::class);
    }

    public function brand()
    {
      return $this->belongsTo(Brand::class);
    }

    public function obtenerYear() 
    {
        if($this->year == 0){
            return "PTE";
        }else{
            return $this->year;
        }   
    }

    public function porcentaje()
    {
        $mantenimiento = Maintenance::where('box_id', $this->id)->orderBy('id', 'desc')->first();
        
        if($mantenimiento){
            $points = DB::table('assigned_points')->where('maintenance_id', $mantenimiento->id)->get();
            $total = 100/$points->count();
            $corrects = $points->pluck('value')->intersect('1')->count();
            /*$corrects = $corrects->pluck('1');*/
            $percent = round($corrects * $total);

            return $percent;
        }else{
            return "";
        }
    }

    public function movimientos()
    {
        $movement = Movement::where('box_id', $this->id)->orderBy('id', 'desc')->first();

        if ($movement) {
            if ($movement->movements % 2 == 0) {
                $movimientos = $movement->movements / 2;
            }else{
                $movimientos = ($movement->movements - 1) / 2;
            }
        }else{
            $movimientos = 0;
        }


        return $movimientos;
    }

    public function proximaInspeccion()
    {

    }
}
