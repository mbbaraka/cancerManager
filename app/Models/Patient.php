<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Diagnosis;

class Patient extends Model
{
    use HasFactory;

    public function diagnosis () {
        return $this->hasMany(Diagnosis::class, 'patient_id');
    }
}
