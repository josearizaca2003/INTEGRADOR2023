<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_id',
        'graduate_id',
        'FechaMonitoreo',
        'Resultado',
        // Otros campos relevantes
    ];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    // Relación con el modelo Graduate
    public function graduate()
    {
        return $this->belongsTo(Graduate::class);
    }
}
