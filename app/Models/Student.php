<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'email', 'phone'];

    public function course() {
        return $this->hasMany(Course::class);
    }
}
