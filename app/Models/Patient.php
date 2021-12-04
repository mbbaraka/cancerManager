<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Diagnosis;

class Patient extends Model
{
    use HasFactory;

    protected $primaryKey = 'patient_id';

    public $incrementing = false;


    public function diagnosis () {
        return $this->hasOne(Diagnosis::class, 'pat_id', 'patient_id');
    }

    public function referrals () {
        return $this->hasOne(Referral::class, 'pat_id', 'patient_id');
    }
}
