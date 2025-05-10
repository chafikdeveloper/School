<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $fillable = ['course_id', 'students', 'study_days', 'start_date', 'end_date', 'start_time', 'end_time'];

    public function students() {
        return $this->belongsToMany(Student::class)->withTimestamps();
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
