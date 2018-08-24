<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ordersdetail extends Model
{
    public  $table = 'ordersdetail';
    // 设置模型的主键
    public $primaryKey = 'did';

    public $timestamps = true;

    public function orders()
    {
        return $this->belongsTo('App\Models\Orders','id');
    }
}
