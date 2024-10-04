<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Height extends Model
{
    use HasFactory;
    protected $fillable = ['height_feet', 'height_inches', 'height_cm'];
}
