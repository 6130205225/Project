<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Userrole;
use App\Models\Temple;
use App\Models\Templetype;
use App\Models\Activity;
use App\Models\Activitypic;
use DB;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Adminuserone()
    {
        $adminHome = User::select(
            'user_id',
            'user_firstname',
            'user_lastname',
            'username',
            'fk_user_role_id'
        )
        ->leftJoin('userroles', 'users.user_id', '=', 'userroles.user_role_id')
        ->orderBy('users.user_id', 'asc')
        ->get();
        // dd($adminHome);
        return view('Adminuser', compact('adminHome'));
    }

    public function Deleteuser(Request $request)
    {
        $Deleteuserone = $request-> user_id;
        DB::table('users')->where('user_id', '=', $Deleteuserone)->delete();
        // dd($Deleteuserone);
        return redirect()->route('adminuser.delete');
    }

    public function Adminusertwo()
    {
        $admintempleuerone = Temple::select(
            'temple_id',
            'temple_name',
            'temple_description',
            'temple_address',
            // 'fk_temple_type_id'
        )

        // ->join('templetypes', 'temples.temple_id', '=', 'templetypes.temple_type_id')
        ->orderBy('temples.temple_id', 'asc')
        ->get();

        // ->where($truncated = Str::limit('temple_description')->limit(20))
        // $message = $admintempleuerone;
        // echo substr($message,-100);
        // $truncated = Str::limit($admintempleuerone)->limit(20);
        // $truncated = Str::of('The quick brown fox jumps over the lazy dog')->limit(20);

        return view('Admintempleuser', compact('admintempleuerone'));
    }

    public function deleteTemple(Request $request)
    {
        $Deletetempleone = $request-> temple_id;
        // dd($Deletetempleone);
        // DB::table('activities')->where('fk_temple_id', '=', $Deletetempleone)->delete();
        DB::table('temples')->where('temple_id', '=', $Deletetempleone)->delete();
        // dd($Deletetempleone);
        return redirect()->route('admintempleuser.delete');
    }


    public function Adminusertree()
    {
        $adminctivityhome = Activity::select(
            'activity_id',
            'activity_name',
            'activity_description',
            // 'fk_temple_id',
        )
        // ->join('temples', 'activities.activity_id', '=', 'temples.temple_id')
        ->orderBy('activities.activity_id', 'asc')
        ->get();
        return view('Adminhome', compact('adminctivityhome'));
    }

    public function deleteActivity(Request $request)
    {
        $Deleteactivityone = $request-> activity_id;
        DB::table('activities')->where('activity_id', '=', $Deleteactivityone)->delete();
        // dd($Deleteactivityone);
        return redirect()->route('adminhome.delete');
    }

}
