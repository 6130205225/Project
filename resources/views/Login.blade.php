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
    <div class="hero min-h-screen bg-base-200">
        <div class="flex-col hero-content lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <!-- <h1 class="text-5xl font-bold">Login now!</h1>
                <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            </div> -->
                <div class="card flex-shrink-0 max-w-xl shadow-2xl bg-base-100">
                    <div class="card-body px-16">
                        <div class="form-control ">
                            <label class="label">
                                <span class="label-text ">เข้าสู่ระบบ</span>
                            </label>
                            <input type="text" placeholder="เข้าสู่ระบบ*" class="input input-bordered w-full px-6">
                        </div>
                        <div class="form-control ">
                            <label class="label">
                                <span class="label-text">รหัสผ่าน</span>
                            </label>
                            <input type="text" placeholder="รหัสผ่าน*" class="input input-bordered w-full px-6">
                            <label class="label ">
                                <a href="#" class="label-text-alt link link-hover text-primary font-bold">สมัครสมาชิก</a>
                            </label>
                        </div>
                        <!-- <div class="form-control mt-6">
                            <button class="btn btn-primary">เข้าสู่ระบบ</button>
                        </div> -->

                        <label for="my-modal" class="btn modal-button bg-primary-focus btn btn-primary">เข้าสู่ระบบ</label>

                        <!-- Put this part before </body> tag -->
                        <input type="checkbox" id="my-modal" class="modal-toggle">
                        <div class="modal">
                            <div class="modal-box">
                                <p class="py-4 text-center">กรุณากรอกข้อมูล!</p>
                                <div class="modal-action">
                                    <label for="my-modal" class="btn">ตกลง</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>