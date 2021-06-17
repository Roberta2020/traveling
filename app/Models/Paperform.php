<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paperform extends Model
{
    use HasFactory;

    public $fillable = ['title', 'url', 'paperform_code', 'page', 'name', 'phone', 'email', 'request'];
}
