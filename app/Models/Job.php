<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'Titulo',
        'Descripcion',
        // Otros campos relevantes
    ];
    //Relacion de uno a muchos
    public function application(){
        return $this->hasMany(Application::class, 'job_id');
    }
    // Relación con el modelo Company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function image() {
        return $this->morphOne( Image::class, 'imageable' );
        }
}
