<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = ['accnumber', 'description', 'sum', 'name', 'surname', 'userid'];
}

