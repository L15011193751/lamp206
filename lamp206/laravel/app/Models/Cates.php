<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cates extends Model
{
    //



    protected $table='sh_cate';
    protected $pk='id';
    protected $timestamps='false';

    protected $fillable=[
     'cname','pid','path'

   ]
}
