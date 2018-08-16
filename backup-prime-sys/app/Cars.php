<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'pc_car';

    public function fromCompany(){
        return $this->belongsTo(CarMakers::class,'makerID','id');
    }
}
