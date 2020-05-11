<?php

namespace App;

use Carbon\Carbon;
use App\Presenters\UserPresenter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use GeneralFunctions;
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'password_encrypted', 'inactive_at'
    ];*/

    protected $guarded = [
        'id_user', 'created_at', 'updated_at', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*protected $hidden = [
        'password', 'remember_token',
    ];*/

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function present()
    {
      return new UserPresenter($this);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function getUrlAttribute()
    {
      if (!$this->avatar) {
        return 'public/default.jpg';
      }

      return $this->avatar;
    }

    public function saludo()
    {
        return "Hola";
    }
}
