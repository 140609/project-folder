<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id', 'name', 'marks_obtained',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

