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
    <form action="/loginhome" method="POST">
        @csrf
        <div class="hero min-h-screen bg-base-200">
            <div class="flex-col hero-content lg:flex-row-reverse">
                <div class="text-center lg:text-left">
                    <div class="card flex-shrink-0 max-w-xl shadow-2xl bg-base-100">
                        <div class="card-body px-16">
                            <div class="form-control ">
                                <input type="text" id="username" name="username" placeholder="ชื่อผู้ใช้*"
                                    class="input input-bordered w-full px-6">
                            </div>
                            <div class="form-control ">
                                <label class="label">
                                    {{-- <span class="label-text">รหัสผ่าน</span> --}}
                                </label>
                                <input type="password" id="password" name="password" placeholder="รหัสผ่าน*"
                                    class="input input-bordered w-full px-6">
                                <label class="label ">
                                    <a href="{{ route('register.create') }}"
                                        class="label-text-alt link link-hover text-primary font-bold">สร้างสมาชิกใหม่</a>
                                </label>
                            </div>

                            <div class="form-control mt-6 btn btn-primary">
                                <button type="submit" value="submit">เข้าสู่ระบบ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
