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

    <div class="input-group flex flex-wrap items-center justify-center ">
        <div class="modal-box text-center bg-base-100 px-11">
            {{-- <h3 class="font-bold text-lg">ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้องกรุณากรอกใหม่อีกครั้ง</h3> --}}
            <p class="py-4">ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้องกรุณากรอกใหม่อีกครั้ง</p>
            <div class="">
                <a href="{{ route('login.check') }}" class="btn btn-warning">ตกลง</a>
            </div>
        </div>
    </div>
</body>

</html>
