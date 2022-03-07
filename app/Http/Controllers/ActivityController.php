<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function getActivityAll()
    {
        $activityTemple = Activity::select(
            'activities.temple_event_id',
            'activities.temple_event_name',
            'activities.temple_event_description',

        )
            ->orderBy('activities.temple_event_id', 'asc')
            ->get();
        // dd($activityTemple);
        return view('Activityall', compact('activityTemple'));
    }
}
