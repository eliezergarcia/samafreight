<?php

namespace App\Presenters;

use App\User;
use Illuminate\Support\HtmlString;

class UserPresenter extends Presenter
{
    public function statusBadge()
    {
      if($this->model->inactive_at){
            return new HtmlString('<span class="badge badge-danger-lighten"><i class="mdi mdi-close-circle-outline"></i> Inactivo</span>');
        }else{
            if($this->model->roles->isEmpty()){
                return new HtmlString('<span class="badge badge-warning-lighten"><i class="mdi mdi-alert-outline"></i> Rol no asignado</span>');
            }else{
                return new HtmlString('<span class="badge badge-success-lighten"><i class="mdi mdi-check-circle-outline"></i> Activo</span>');
            }
        }
    }
}
