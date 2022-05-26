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
        return view('Activity', compact('activityTwo')); //compact หมายถึง การส่งตัวแปรไปพร้อม View ด้านซ้าย
    }

    public function SearchActivity(Request $request)
    {
        $searchAt = $request->searchAt; //เอาไว้เก็บตัวแปรที่รับมา ตัวแรกด้านซ้ายจะเป็นอะไรก็ได้ แต่ตัวแปรด้านขวาต้องเป็นชื่อที่ตรงกับ name ในหน้า view
        //------------- ข้างล่างนี้คือการ Query ข้อมูล (การค้นหาข้อมูล) -------------------
        $searchOneAt = Activity::select('activities.activity_name', 'activities.activity_description', 'activitiespics.activity_pic_url')
        ->join('activitiespics', 'activities.activity_id', '=', 'activitiespics.activity_id')
        ->where('activity_name', 'LIKE', "%{$searchAt}%") //LIKE คือถ้ามีคำที่เหมือนกับ ตัวแปรด้านขวา
        ->get();
        //------------- สิ้นสุดการ Query ข้อมูล ----------------------------
        // dd($searchOneAt);
        return view('ActivitySearch', compact('searchOneAt')); //ด้านในของ return จะสังเกตุได้ว่าไม่มี $ เพราะใน laravel9 ได้อัพเดท เป็นการใส่ '' แทน $
    }

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


