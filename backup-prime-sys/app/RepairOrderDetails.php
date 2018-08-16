<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairOrderDetails extends Model
{
    protected $table = 'pc_order_detail';

    public function fromService(){
        return $this->belongsTo(Services::class,'serviceID','id');
    }
}
