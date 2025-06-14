<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'sks'];
    // Relationship: Many Subjects belong to many Students
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
