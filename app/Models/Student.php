<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'email', 'phone'];

    public function seances() {
        return $this->belongsToMany(Seance::class)->withTimestamps();
    }
}
