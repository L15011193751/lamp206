<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{	
	// 设置表名
    public  $table = 'orders';

    // 设置主键
    public $primaryKey = 'id';
 	//关联  订单详情
	public function od()
	{
		return $this->hasOne('App\Models\Ordersdetail','oid');
	}

}
