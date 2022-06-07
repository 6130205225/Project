<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = ['activity_name','fk_temple_id','activity_description','fk_user_id'];
    //เป็นการบันทึกข้อมูลลงใน Models
}
