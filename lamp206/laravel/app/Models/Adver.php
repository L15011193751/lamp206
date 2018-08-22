<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adver extends Model
{
    //

    protected $table='advers';
    protected $pk='id';

    public $timestamps=false;
 /*   protected $dateFormat = 'U';*/

    protected $fillable=[
       'advername','desc','position','adverstart','adverstop','gpic','piclink','price','status',


    ];


}
