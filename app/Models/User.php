<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Auth\Passwords\CanResetPassword;
// use Illuminate\Foundation\Auth\Access\Authorizable;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
// use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
// use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


// // class User extends Model implements
// // AuthenticatableContract,
// // AuthorizableContract,
// // CanResetPasswordContract
// class User extends Eloquent implements
//     AuthenticatableContract,
//     AuthorizableContract,
//     CanResetPasswordContract
// {
//     use HasFactory;
//     use Authenticatable, Authorizable, CanResetPassword, MustVerifyEmail;

// }

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
}
