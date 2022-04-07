<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Activitypic;
use App\Models\Temple;

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



    public function Onactivitytemple(Request $request)
    {
        $Oneactivity = $request->activityid;
        $activityTwo = Activity::select('temple_name','activity_name', 'activity_description', 'activity_pic_url')
        ->join('activitiespics', 'activities.activity_id', '=', 'activitiespics.activity_id')
        ->join('temples', 'activities.fk_temple_id', '=', 'temples.temple_id')
        ->where('activities.activity_id', '=', $Oneactivity)
        ->get();
        return view('Activity', compact('activityTwo'));
    }







    // public function Onactivitytemple(Request $request)
    // {
    //     $activityOne = $request->$activityOne;
    //     $activityTwo = Activity::select('activity_name', 'activity_description', 'activity_pic_url')
    //     ->join('activitiespics', 'activities.activity_id', '=', 'activitiespics.activity_id')
    //     ->where('activity_id', '=', $activityOne)
    //     ->get();
    //     return view('Activity', compact('activityTwo'));
    // }

        // public function getActivities()
    // {
    //     $activityUser = Activity::select(
    //         'activities.activity_id',
    //         'activities.activity_name',
    //         'activities.activity_description',
    //         'activitiespics.activity_pic_url'
    //     )
    //     ->join('activitiespics', 'activities.activity_id', '=', 'activitiespics.activity_id')
    //         ->orderBy('activities.activity_id', 'asc')
    //         ->get();
    //         return view('Activity', compact('activityUser'));
    // }

}
