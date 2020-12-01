<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
 protected $fillable = [
      
      'FullName','Email','Phone','Payment','Individuals','Package_id'
  ];
}
