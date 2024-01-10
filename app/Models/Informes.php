<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informes extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'pais', 'idioma', 'email', 'open_rate', 'click_rate', 'redencion'];
}
