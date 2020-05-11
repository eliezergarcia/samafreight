<?php

namespace App;

use Carbon\Carbon;
use App\Presenters\TruckPresenter;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use GeneralFunctions;
    
    protected $guarded = [
        'id_truck', 'created_at', 'updated_at'
    ];

    public function present()
    {
      return new TruckPresenter($this);
    }

    public function type()
    {
      return $this->belongsTo(Type::class);
    }

    public function brand()
    {
      return $this->belongsTo(Brand::class);
    }

    public function service()
    {
      return $this->belongsTo(Service::class);
    }

    public function owner()
    {
      return $this->belongsTo(Owner::class);
    }

    public function peso()
    {
    	return "Hola";
    }

    public function porcentaje()
    {
        $mantenimiento = Maintenance::where('truck_id', $this->id)->orderBy('id', 'desc')->first();
        
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

    public function ultimaInspeccion()
    {
        $mantenimiento = Maintenance::where('truck_id', $this->id)->orderBy('id', 'desc')->first();

        if($mantenimiento){
            $fecha = Carbon::parse($mantenimiento->date)->format('d/m/Y');

            return $fecha;
        }else{
            return "No existe";
        }

    }

    public function proximaInspeccion()
    {
        $mantenimiento = Maintenance::where('truck_id', $this->id)->orderBy('id', 'desc')->first();

        if($mantenimiento){
            $fecha = Carbon::createFromFormat('Y-m-d', $mantenimiento->date);        
            $fecha->addMonth();
            $fecha = Carbon::parse($fecha)->format('d/m/Y');

            return $fecha;
        }else{
            return "No existe";
        }

    }

}
