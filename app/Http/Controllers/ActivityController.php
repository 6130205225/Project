<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function getActivityAll()
    {
        $activityTemple = Activity::select(
            'activities.activity_id',
            'activities.activity_name',
            'activities.activity_description',
            'activities.activity_pic_url'
        )
            ->join('Activitypic', 'activities.activity_id', '=', 'activitiespics.activity_id')
            ->orderBy('activities.activity_id', 'asc')
            ->get();
        // dd($ชื่อ);
        return view('Activityall', compact('activityTemple'));
    }
}
