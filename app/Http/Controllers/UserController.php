<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Userrole;
use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function wronghome(Request $request)
    {
        return redirect('/wrong');
    }

    public function authenticate(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        // Auth::attempt เป็นการเช็ค id password กับ ฐานข้อมูล ใน DB ในบรรทัดด้านล่าง
        if (Auth::attempt(['username' => $username, 'password' => $password])) {

            $loginhome = User::select('fk_user_role_id')
            ->where('username', '=', $username)
            ->where('password', '=', $password)
            ->get();
// dd(auth()->user()->fk_user_role_id);
            $request->session()->regenerate(); // การสร้าง session เพื่อเข้าไปในระบบ
// dd($request->session()->regenerate());
            if (auth()->user()->fk_user_role_id==1){
                return redirect('/adminuser');
            }

            if (auth()->user()->fk_user_role_id==2){
                return redirect('/templeadmin');
            }
            // dd(auth()->user()->user_id); //การเทียบ id ของแต่ละคนที่ที่ login เข้ามา
            return redirect()->intended('/homepage');

        }
        return redirect('/wrong');

    }
    public function logouthome(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/homepage');

    }

    public function registerhome(Request $request)
    {
        $user_firstname = $request->user_firstname;
        $user_lastname = $request->user_lastname;
        $username = $request->username;
        $password = $request->password;
        $passwords = $request->passwords;
        $fk_user_role_id = $request->fk_user_role_id;
        // dd('ชื่อจริง'.$user_firstname.' นามสกุล'.$user_lastname.' ชื่อผู้ใช้'.$username.' รหัสผ่าน'.$password. ' ยืนยันรหัส'.$passwords.' บทบาท'.$fk_user_role_id);

        // dd('saasf');

        if ($password === $passwords){
            DB::table('users')->insert([
                'user_firstname' => $user_firstname,
                'user_lastname' => $user_lastname,
                'username' => $username,
                'password' => Hash::make($passwords), //คือ function เข้ารหัสผ่าน เวลาใช้เอาตัวแปลที่ต้อเข้ามาใน ()
                'fk_user_role_id' => $fk_user_role_id
            ]);

            return redirect('/login');
            // dd('ไม่จริง');
        }
        else {

            return back()->withInput();
            // dd('ไม่จริง');
        }
    }

}





// โค้ดเดิมกันหาย ****************

// class UserController extends Controller
// {
//     public function wronghome(Request $request)
//     {
//         return redirect('/wrong');
//     }

//     public function loginhome(Request $request)
//     {
//         $username = $request->username;
//         $password = $request->password;
//         // dd($username.$password);
//         // return redirect('/');
//         $loginhome = User::select(
//             'username',
//             'password',
//             'fk_user_role_id'
//         )
//         ->where('username', '=', $username)
//         ->where('password', '=', $password)
//         ->get();
//         // dd($loginhome[0]['fk_user_role_id']);
//             if (count($loginhome)) {
//                 $request->session()->put('user', 'arm');
//                 if ($loginhome[0]['fk_user_role_id']==2){
//                     return redirect('/templeadmin');
//                 }
//                 return redirect('/homepage');
//                 // dd('จริง');
//             }
//             else {
//                 return redirect('/wrong');

//                 // ->with('error','Email-Address And Password Are Wrong');
//                 // dd('ไม่จริง');
//             }

//     }

