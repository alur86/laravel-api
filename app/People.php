<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    
public $timestamps = true;	
    
protected $table = 'peoples';

 public function info()
    {
        return $this->belongsTo('App\Info');
    }








}
