<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_status extends Model
{
    protected $fillable = [
       
        'stato'
  
    ];

    public $table ="orders_status";
    use HasFactory;

    public function orders(){
        return $this->hasMany('App\Models\Order');
    }
}

