<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'town', 'province', 'email', 'username', 'password', 'bio', 'profilepicture', 'profileextension'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function setFNameAttribute($value)
    {
        $this->attributes['fname'] = ucwords($value);
    }

    public function setLNameAttribute($value)
    {
        $this->attributes['lname'] = ucwords($value);
    }

    public function setTownAttribute($value)
    {
        $this->attributes['town'] = ucwords($value);
    }

    public function setProvinceAttribute($value)
    {
        $this->attributes['province'] = ucwords($value);
    }

    public function markedAuctions(){
        return $this->belongsToMany('App\Auction', 'marks');
    }
}