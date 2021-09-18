<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class due extends Model
{
    use HasFactory;
    public $table = 'due';
    public $timestamps = false;
}
