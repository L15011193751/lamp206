<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{	
	// 设置表名
    public  $table = 'orders';

    // 设置主键
    public $primaryKey = 'oid';
}
