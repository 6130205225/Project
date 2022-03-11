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
    <div class="hero min-h-screen"
        style="background-image: url(https://cms.dmpcdn.com/travel/2020/08/16/e8cb01a0-df1f-11ea-a0b4-232d08119930_original.jpg);">
        <div class="hero-overlay bg-opacity-60">
            <div class="max-w-full text-center">
                <h1 class="mb-5 text-5xl font-bold text-base-100 py-5">ระบบท่องเที่ยววัดในภาคอีสาน</h1>
                <div class="form-control">
                    <div class="input-group flex flex-wrap items-center justify-center ">
                        <input type="text" placeholder="ค้นหา" class="input input-bordered ">
                        <button class="btn btn-square">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid gap-5 md:grid-cols-3 grid-cols-1 py-5 px-5 ">
                @foreach ($templeHome as $templeHome)
                    {{-- <h3 class="text-3xl font-bold">{{ $templeHome->temple_name }}</h3> --}}
                    <div class="card card-compact m-auto p-auto bg-base-100 shadow-xl w-full h-full ">
                        <figure><img class="w-full h-72 " src="{{ $templeHome->temple_pic_url }}" alt="">
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">{{ $templeHome->temple_id }}</h2>
                            <div class="card-actions justify-end">
                                <a href="" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </div>
</body>

</html>
