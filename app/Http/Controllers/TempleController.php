<?php

namespace App\Http\Controllers;

use App\Models\Temple; // เอาไว้โยงข้อมูลจาก Model
use App\Models\Templepic;
use App\Models\Activity;
use App\Models\Activitypic;
use App\Models\User;
use App\Models\Userrole;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class TempleController extends Controller
{
    public function getTemple()
    {
        $templeHome = Temple::select(
            'temples.temple_id',
            'temples.temple_name',
            'temple_description',
            'temple_address',
            'templepics.temple_pic_url'
        ) //คือการดึงข้อมูล
            ->leftJoin('templepics', 'temples.temple_id', '=', 'templepics.fk_temple_id')
            ->orderBy('temples.temple_id', 'asc') // asc= เรียงจากหน้าไปหลัง desc=เรียงจากหลังไปหน้า
            ->limit(6)
            ->get();
        // dd($templeHome);
        return view('Homepage', compact('templeHome'));
    }

    public function templeOne()
    {
            return view('Templeuser');
    }

    public function SearchTemple(Request $request)
    {
        $search = $request->search;
        $searchOne = Temple::select('temple_name','temple_description','templepics.temple_pic_url')
        ->leftJoin('templepics', 'temples.temple_id', '=', 'templepics.fk_temple_id')
        ->where('temple_name', 'LIKE', "%{$search}%")
        ->get();
        return view('Templeuser', compact('searchOne'));
    }

    public function searchtempleOne(Request $request)
    {
        $searchTwo = $request->searchTwo;
        $searchOne = Temple::select('temple_name','temple_description','temple_address','templepics.temple_pic_url')
        ->leftJoin('templepics', 'temples.temple_id', '=', 'templepics.fk_temple_id')
        ->where('temple_id', '=', $searchTwo)
        ->get();
        // dd('fasfas');
        return view('Templeuser', compact('searchOne'));
    }

    public function Savetempleadmin(Request $request)
    {
        $savetemple1 = $request->temple_name;
        $savetemple2 = $request->fk_temple_type_id;
        $savetemple3 = $request->temple_description;
        $savetemple4 = $request->temple_address;
        $savetemple5 = $request->uploadphoto;
        // $userid = User::select('user_id')->get();

        // dd($savetemple6[0]['temple_id']);
        $fileName = '/uploads/'.time().'.'.$request->uploadphoto->extension();
        // ตั้งชื่อเรื่อง แต่ไม่สารถกำหนดเองได้

        $request->uploadphoto->move(public_path('uploads'), $fileName);
        // อัพโหลดไฟล์รูปภาพลงเครื่องจะอยู่ใน "C:\xampp\htdocs\Project\public"
        // dd($savetemple6);
            // dd(public_path());

        dd($userid->id);

        $SaveidUsertemple = User::select('user_id')
        ->where('fk_user_id', '=', 1)
        ->get();



        DB::table('temples')->insert([
            'temple_name' => $savetemple1,
            'fk_temple_type_id' => $savetemple2,
            'temple_description' => $savetemple3,
            'temple_address' => $savetemple4,
            'fk_user_id' => 1
        ]);

        $savetemple6 = Temple::select('temple_id')
        ->where('fk_user_id', '=', 1)
        ->get();


        DB::table('templepics')->insert([
            'fk_temple_id' => $savetemple6[0]['temple_id'],
            'temple_pic_url' => $fileName,
        ]);
        // dd($savetemple1.$savetemple2.$savetemple3);
        return view('Templeadmin');
    }

    public function Showadmintemple()
    {
        $showone = Temple::select(
            'temples.temple_name',
            'temples.fk_temple_type_id',
            'temples.temple_description',
            'temples.temple_address'
        )
        ->get();
        return view('Templeadmin', compact('showone'));//compact คือการโยนข้อมูลกลับไปหา View
    }



    public function SaveactivityTemple(Request $request)
    {
        $saveactivity1 = $request->activity_name;
        $saveactivity2 = Temple::select('temple_id')
        ->where('fk_user_id', '=', 1)
        ->get();
        $saveactivity3 = $request->activity_description;

        $useridone = User::select('user_id')->get();
        // dd($saveactivity2);
        // dd($saveactivity1.$saveactivity2.$saveactivity3);
        // dd($saveactivity2[0]['temple_id']);

        $fileNameone = '/uploads/'.time().'.'.$request->uploadphototwo->extension();
        // ตั้งชื่อเรื่อง แต่ไม่สารถกำหนดเองได้
        // อย่าลืมดู name ใน form ตัวอย่าง "uploadphototwo" ให้ตรงกัน

        $request->uploadphototwo->move(public_path('uploads'), $fileNameone);
        // อัพโหลดไฟล์รูปภาพลงเครื่องจะอยู่ใน "C:\xampp\htdocs\Project\public"
        // อย่าลืมดู name ใน form ตัวอย่าง "uploadphototwo" ให้ตรงกัน

        $PhotoActivity = Activity::create([
            'activity_name' => $saveactivity1,
            'fk_temple_id' => $saveactivity2[0]['temple_id'],
            'activity_description' => $saveactivity3,
            'fk_user_id' => 1
        ]);
        // dd($saveactivity1.$saveactivity2.$saveactivity3);

        // dd($PhotoActivity->id);

        $saveactivity4 = Activity::select('activity_id')
        ->where('fk_temple_id', '=', 1)
        ->get();

        // dd($Savephotoone->id);
        // dd('fasf');
        // dd($saveactivity4);

            $Savephotoone = Activitypic::create([
                'fk_activity_id' => $PhotoActivity->id,
                'fk_temple_id' => $saveactivity2[0]['temple_id'],
                'activity_pic_url' => $fileNameone,
            ]);

        return view('ActivityTemple');
    }

    public function Showadminactivitytemple()
    {
        $showtwo = Activity::select(
            'activities.activity_name',
            'activities.fk_temple_id',
            'activities.activity_description',
        )
        ->get();
        return view('ActivityTemple', compact('showtwo'));//compact คือการโยนข้อมูลกลับไปหา View
    }

}

