<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lunbo extends Model
{
    //
    protected $table='lunbo';
    protected $pk='id';
    public    $timestamps=false;
    protected $fillable=[

    'title','gpic','url','status'


    ];

}
