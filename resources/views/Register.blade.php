<!DOCTYPE html>
<html data-theme="bumblebee">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.2.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="navbar bg-secondary">
        <div class="navbar-start">
            <div class="dropdown">
                <label class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                    <li><a>Item 1</a></li>
                    <li tabindex="0">
                        <a class="justify-between">
                            Parent
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost normal-case text-xl">Temple Tourism System In Esan</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal p-0">
                <li><a>หน้าหลัก</a></li>
                <li><a>กิจกรรมทั้งหมด</a></li>
                <li><a>รีวิวทั้งหมด</a></li>
            </ul>
        </div>
        <div class="navbar-end ">
            <!-- <a class="btn">เข้าสู่ระบบ</a> -->
        </div>
    </div>

    <div class="hero min-h-screen bg-base-200 ">
        <div class="flex-col hero-content lg:flex-row-reverse">
            <div class="card flex-shrink-0 w-full shadow-2xl bg-base-100 px-32 text-center">
                <div class="card-body">

                    <h3 class="font-bold">สมัครสมาชิก</h3>
                    <input type="text" placeholder="ชื่อ" class="input input-bordered input-md w-full max-w-xs">
                    <input type="text" placeholder="นามสุกล" class="input input-bordered input-md w-full max-w-xs">
                    <input type="text" placeholder="ชื่อผู้ใช้" class="input input-bordered input-md w-full max-w-xs">
                    <input type="text" placeholder="รหัสผ่าน" class="input input-bordered input-md w-full max-w-xs">
                    <input type="text" placeholder="ยืนยันรหัสผ่าน" class="input input-bordered input-md w-full max-w-xs">

                    <div class="form-control">
                        <label class="cursor-pointer label">

                            <input type="radio" name="radio-6" class="radio checked:bg-blue-500">
                            <span class="label-text">ผู้ดูแลวัด</span>

                            <input type="radio" name="radio-6" class="radio checked:bg-blue-500">
                            <span class="label-text">ผู้ใช้งานทั่วไป</span>

                        </label>
                    </div>


                    <div class="form-control mt-6">
                        <button class="btn btn-primary">สมัครสมาชิก</button>
                    </div>
                </div>
            </div>

        </div>
    </div>



</body>

</html>