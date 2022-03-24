<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Userrole;
use DB;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function loginhome(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        // dd($username.$password);
        // return redirect('/');
        $loginhome = User::select(
            'username',
            'password'
        )
        ->where('username', '=', $username)
        ->where('password', '=', $password)
        ->get();
        // dd(count($loginhome));
            if (count($loginhome)) {
                $request->session()->put('user', 'arm');
                return redirect('/homepage');
                // dd('จริง');
            }
            else {
                return redirect('/login');
                // dd('ไม่จริง');
            }

    }
    public function logouthome(Request $request)
    {
        $value = $request->session()->pull('user', 'arm');
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
                'password' => $password,
                'fk_user_role_id' => $fk_user_role_id
            ]);
            return redirect('/login');
            // dd('ไม่จริง');

        }
        else {
            return back()->withInput();
        }



    }

}


