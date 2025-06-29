<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'capacity', 'teacher_id'];

    public function teacher() {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function enrollments() {
        return $this->hasMany(Enrollment::class);
    }

    public function grades() {
        return $this->hasMany(Grade::class);
    }

    public function activities() {
        return $this->hasMany(Activity::class);
    }
}

