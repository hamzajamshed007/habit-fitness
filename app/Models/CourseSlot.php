<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSlot extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'course_id','trainer_id','start_time','end_time','day'
    ];
}
