<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'semester',
        'lecturer_id',
        'academic_year',
        'sks',
        'code',
        'description',
    ];
    public function lecturer()
    {
        return $this->belongsTo(User::class);
    }
}
