<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalCondition extends Model
{
    protected $fillable = [
        'symptoms',
        'possible_conditions',
        'severity_assessment',
        'emergency_warning_signs',
          'min_days',
          'max_days',
    ];
}