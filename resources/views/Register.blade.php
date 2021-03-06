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
    @include('navbar')
    <form action="registerhome" method="POST">
        @csrf
        <div class="hero min-h-screen bg-base-200 ">
            <div class="flex-col hero-content lg:flex-row-reverse">
                <div class="card flex-shrink-0 w-full shadow-2xl bg-base-100  text-center">
                    <div class="card-body">
                        <h3 class="font-bold">สมัครสมาชิก</h3>
                        <div class="grid grid-cols-1 gap-4">
                            <div class="grid grid-cols-2 gap-4">
                                 {{-- เป็นการรับค่าจาก  back()->withInput()  โดยใช้คำสั่ง value="{{ old('ชื่อตัวแปร')}}"    --}}
                                <input type="text" placeholder="ชื่อ" id="user_firstname" name="user_firstname"
                                value="{{ old('user_firstname')}}" class="input input-bordered input-md w-full max-w-xs">
                                <input type="text" placeholder="นามสุกล" id="user_lastname" name="user_lastname"
                                value="{{ old('user_firstname')}}" class="input input-bordered input-md w-full max-w-xs">
                            </div>
                            <input type="text" placeholder="ชื่อผู้ใช้" id="username" name="username"
                            value="{{ old('username')}}" class="input input-bordered input-md w-full ">
                            <input type="password" placeholder="รหัสผ่าน" id="password" name="password"
                            value="{{ old('password')}}"    class="input input-bordered input-md w-full ">
                            <input type="password" placeholder="ยืนยันรหัสผ่าน" id="passwords" name="passwords"
                                class="input input-bordered input-md w-full ">

                            <div class="form-control">
                                <label class="cursor-pointer label">
                                    <input type="radio" id="usernew" name="fk_user_role_id" value="3"
                                        class="radio checked:bg-blue-500">
                                    <span class="label-text">ผู้ใช้งานทั่วไป</span>
                                    <input type="radio" id="admintemplenew" name="fk_user_role_id" value="2"
                                        class="radio checked:bg-blue-500">
                                    <span class="label-text">ผู้ดูแลวัด</span>
                                </label>
                            </div>

                            <div class="form-control mt-6 btn btn-primary">
                                <button type="submit" value="submit">สมัครสมาชิก</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>

</body>

</html>
