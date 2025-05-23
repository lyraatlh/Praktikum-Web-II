<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    public function students()
    {
    return $this->hasMany(Student::class);
    }
    
    protected $fillable = [
        'name',
        'code',
        'description',
    ];
}