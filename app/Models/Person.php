<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = [
        'DNI',
        'Nombre',
        'Apellido',
        'FechaNacimiento',
        'EstadoCivil',
        'Correo',
        'Password',
        'Rol',
        'Celular',
        // Otros campos relevantes
    ];

    public function graduate(){
        return $this->hasMany(Graduate::class);
    }
    public function teacher(){
        return $this->hasMany(Teacher::class);
    }
}
