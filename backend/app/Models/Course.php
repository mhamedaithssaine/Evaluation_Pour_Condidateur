<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $fillabl =[
        'title',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)
                    ->withPivot('progress')
                    ->withTimestamps();
    }
}
