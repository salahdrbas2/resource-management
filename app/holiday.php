<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class holiday extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = true;
}
