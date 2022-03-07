<?php

namespace App\Http\Controllers;

use App\Models\Temple; // เอาไว้โยงข้อมูลจาก Model
use App\Models\Templepic;

use Illuminate\Http\Request;

class TempleController extends Controller
{
    public function getTemple()
    {
        $templeHome = Temple::select('temples.temple_id', 'temples.temple_name', 'templepics.temple_pic_url') //คือการดึงข้อมูล
            ->join('templepics', 'temples.temple_id', '=', 'templepics.temple_id')
            ->orderBy('temples.temple_id', 'asc')->limit(6) // asc= เรียงจากหน้าไปหลัง desc=เรียงจากหลังไปหน้า
            ->get();
        return view('Homepage', compact('templeHome'));
    }
}
