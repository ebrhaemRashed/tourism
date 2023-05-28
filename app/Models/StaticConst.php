<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticConst extends Model
{
    use HasFactory;
    Const STATUS=['Active','Not Active'];
    Const GENDER=['Male','Female'];
}