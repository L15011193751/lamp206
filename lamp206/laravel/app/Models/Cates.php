<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cates extends Model
{
    //



    protected $table='cate';
    protected $pk='id';
    public $timestamps='false';

    protected $fillable=[
     'cname','pid','path'

   ];
}
