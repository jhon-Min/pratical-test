<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlFormInput extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'date_of_birth', 'gender'];
}
