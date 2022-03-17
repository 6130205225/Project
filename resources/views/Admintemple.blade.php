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
    {{-- @include('navbar') --}}
    <div class="grid gap-5 md:grid-cols-1 grid-cols-1 mx-12">

            <div class="hero-overlay bg-opacity-60">
                <div class="max-w-full text-center">
                    <div>
                        <h1 class="mb-5 text-2xl font-bold text-bg-accent py-5">รายละเอียดวัดของคุณ</h1>
                        ชื่อวัด <input type="text" placeholder="กรุณากรอกชื่อวัด"
                            class="input input-bordered w-full max-w-md text-center">
                    </div>

                    <div class="py-5">
                       ประเภทวัด
                        <div class="btn-group text-center justify-center ">
                            <button class="btn">วัดทั่วไป</button>
                            <button class="btn">วัดป่า  </button>
                        </div>
                    </div>

                </div>
            </div>

    </div>
</body>

</html>
