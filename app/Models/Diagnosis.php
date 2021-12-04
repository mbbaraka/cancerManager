<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;

class Diagnosis extends Model
{
    use HasFactory;

    protected $table = 'diagnosis';

    public function patient () {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
