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
    <h1 class="text-5xl font-bold text-center py-5 ">กิจกรรมทั้งหมด</h1>

    <form action="/searchAt" method="POST">
        @csrf
        {{-- <div class="form-control"> --}}
        <div class="input-group flex flex-wrap items-center justify-center ">
            <input type="text" placeholder="ค้นหา" name="searchAt" class="input input-bordered ">
            <button type="submit" class="btn btn-primary">
                ค้นหา
            </button>
        </div>
        {{-- </div> --}}
    </form>

    @foreach ($activityTemple as $activityTemple)
        <div class="card card-compact bg-base-100 shadow-sm mx-10 my-10">
            <div class="grid gap-5 md:grid-cols-3 grid-cols-1 mx-10">
                <figure class="">
                    <img class="w-4/5 h-48" src=" {{ $activityTemple->activity_pic_url }}" alt="">
                </figure>

                <div class="card-body ">
                    {{-- <p class="text-3xl font-bold break-all">{{ $activityTemple->activity_name }}></p> --}}
                    <p class="text-3xl font-bold break-all">{{ $activityTemple->activity_name }}</p>
                    <p class="">{{ $activityTemple->activity_description }}</p>
                    {{-- <p class="card-title break-all">{{ $activityTemple->activity_id }}</p> --}}

                </div>

                <div class="card-actions justify-end">
                    <form action="/activityOne" method="POST">
                        @csrf
                        <input hidden type="text" name="activityid" value="{{ $activityTemple->activity_id }}">
                        <button type="submit" class="btn btn-primary">รายละเอียดเพิ่มเติม</button>
                    </form>
                </div>

            </div>
            <div class="divider"></div>
        </div>
    @endforeach



</body>

</html>
