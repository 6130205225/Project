<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitypic extends Model
{
    use HasFactory;
    protected $fillable = ['fk_activity_id','fk_temple_id','activity_pic_url'];
}
