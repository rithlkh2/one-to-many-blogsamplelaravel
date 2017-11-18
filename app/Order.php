<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = "orders";

    public function productitems(){
        return $this->hasMany('App\ProductOrder');
    }
}
