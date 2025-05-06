<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'profession', 'bio', 'image'];

    public function course() {
        return $this->hasMany(Course::class);
    }
}
