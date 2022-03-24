<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Activitypic;

class ActivityController extends Controller
{
    public function getActivityAll()
    {
        $activityTemple = Activity::select(
            'activities.activity_id',
            'activities.activity_name',
            'activities.activity_description',
            'activitiespics.activity_pic_url'
        )
            ->join('activitiespics', 'activities.activity_id', '=', 'activitiespics.activity_id')
            ->orderBy('activities.activity_id', 'asc')
            ->get();

        return view('Activityall', compact('activityTemple'));
    }

    public function getActivities()
    {
        $activityUser = Activity::select(
            'activities.activity_id',
            'activities.activity_name',
            'activities.activity_description',
            'activitiespics.activity_pic_url'
        )
        ->join('activitiespics', 'activities.activity_id', '=', 'activitiespics.activity_id')
            ->orderBy('activities.activity_id', 'asc')
            ->get();
            return view('Activity', compact('activityUser'));
    }

}
