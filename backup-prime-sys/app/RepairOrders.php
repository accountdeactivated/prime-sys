<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairOrders extends Model
{
    protected $table = 'pc_order';

    public function fromCar(){
        return $this->belongsTo(Cars::class,'carID','id');
    }
}
