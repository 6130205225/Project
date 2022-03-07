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

    <div class="hero min-h-screen bg-base-100">
        <div class="hero-overlay bg-opacity-60">
            <div class="max-w-full text-center">
                <h1 class="mb-5 text-2xl font-bold text-base-100 py-5">รายละเอียดวัดของคุณ</h1>
                <div class="form-control">
                </div>
                ชื่อวัด <input type="text" placeholder="กรุณากรอกชื่อวัด" class="input input-bordered w-full max-w-md text-center">
                <div class="dropdown dropdown-right">
                    <!-- <h3>ประเภทวัด</h3> -->
                    <label tabindex="0" class="btn m-1 bg-base-200">
                        <h3 class="">โปรดเลือกประเภทวัด</h3>
                    </label>
                    <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>วัดทั่วไป</a></li>
                        <li><a>วัดป่า</a></li>
                    </ul>
                </div>
            </div>
            ที่อยู่ <br>
            <input type="text" placeholder="......" class="input input-bordered w-full max-w-md text-center">


        </div>
</body>

</html>