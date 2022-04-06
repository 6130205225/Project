<?php

namespace App\Http\Controllers;

use App\Models\Temple; // เอาไว้โยงข้อมูลจาก Model
use App\Models\Templepic;

use Illuminate\Http\Request;

class TempleController extends Controller
{
    public function getTemple()
    {
        $templeHome = Temple::select(
            'temples.temple_id',
            'temples.temple_name',
            'temple_description',
            'templepics.temple_pic_url'
        ) //คือการดึงข้อมูล
            ->join('templepics', 'temples.temple_id', '=', 'templepics.fk_temple_id')
            ->orderBy('temples.temple_id', 'asc') // asc= เรียงจากหน้าไปหลัง desc=เรียงจากหลังไปหน้า
            ->limit(6)
            ->get();
        // dd($templeHome);
        return view('Homepage', compact('templeHome'));
    }

    public function getTempleuser()
    {
        $templeOne = Temple::select(
            'temples.temple_id',
            'temples.temple_name',
            'temple_description',
            'temple_address',
            'temple_latitude',
            'temple_longitude',
            'fk_user_id',
            'templepics.temple_pic_url'
        )
        ->join('templepics', 'temples.temple_id', '=', 'templepics.fk_temple_id')

            ->orderBy('temples.temple_id', 'asc') // asc= เรียงจากหน้าไปหลัง desc=เรียงจากหลังไปหน้า
            ->get();
            return view('Templeuser', compact('templeOne'));
    }

}
