<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'Title', 'Destination', 'Description','Price','num_of_people','Image','Returning','Departing'
    ];

}
