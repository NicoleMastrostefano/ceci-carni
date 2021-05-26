<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefono',
        'messaggio',
        'stato',
        'consegna'
    ];

    protected $dates = ["consegna"];

    use HasFactory;
    
    public function order_status(){
        return $this->hasOne('App\Models\Order_status','id','stato');
    }


};


