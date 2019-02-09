<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
   
public $timestamps = true;	
    
protected $table = 'infos';


protected $fillable = array('date_of_birth','gender','hobby');


 public function people()
    {
        return $this->hasOne('App\People');
    }



}
