<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'poster_id','item_name', 'description', 'image_path', 'image_extension', 'min_bid', 'auction_days', 'is_sold', 'sold_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function setItem_nameAttribute($value)
    {
        $this->attributes['item_name'] = ucwords($value);
    }

    public function user(){
        return $this->belongsTo('App\User', 'poster_id');
    }

    public function marks(){
        return $this->hasMany('App\Mark');
    }

}