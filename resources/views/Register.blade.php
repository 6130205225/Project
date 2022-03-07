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