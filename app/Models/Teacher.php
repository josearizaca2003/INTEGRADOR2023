<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'person_id',
        'AreaEspecializacion',
        'Experiencia',
        // Otros campos relevantes
    ];

    public function monitoring(){
        return $this->hasMany(Monitoring::class);
    }
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
