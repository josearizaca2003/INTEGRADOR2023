<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    use HasFactory;
    protected $fillable = [
        'person_id',
        'institution_id',
        'AnioGraduacion',
        'Carrera',
        // Otros campos relevantes
    ];
    //relacion con aplication
    public function aplication()
    {
        return $this->hasMany(Application::class);
    }

    public function monitoring(){
        return $this->hasMany(Monitoring::class);
    }


    // Relación con el modelo Person
    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    // Relación con el modelo Institution
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
