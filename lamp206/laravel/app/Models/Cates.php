<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cates extends Model
{
    //



    protected $table='cate';
    protected $pk='id';
<<<<<<< HEAD
    public $timestamps='false';
=======
    public $timestamps = false;
>>>>>>> origin/zhouguo

    protected $fillable=[
     'cname','pid','path'

   ];
}
