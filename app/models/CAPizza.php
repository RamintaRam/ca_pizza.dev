<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CAPizza extends Model
{
    protected $table = 'ca_pizza';

    protected $fillable = ['id', 'name', 'comment', 'cheese_id', 'pad_id'];

}

