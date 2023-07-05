<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'graduate_id',
        'job_id',
        'FechaPostulacion',
        'Estado',
        // Otros campos relevantes
    ];

    // Relación con el modelo Graduate
    public function graduate()
    {
        return $this->belongsTo(Graduate::class);
    }

    // Relación con el modelo Job
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
