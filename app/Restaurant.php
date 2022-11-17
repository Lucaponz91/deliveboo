<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function plates(){
        return $this->hasMany('App\Plate');
    }

    protected $fillable=[
       'restaurant_address',
        'p_iva',
        'restaurant_description',
        'restaurant_phone_number',
        'user_id'
    ];
}
