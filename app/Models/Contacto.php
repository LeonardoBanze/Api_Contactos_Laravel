<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['name', 'nr_contacto'];
    public $timestamps= false;
    
}
