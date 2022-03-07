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
    <h1 class="text-5xl font-bold text-center py-5">กิจกรรมทั้งหมด</h1>

    @foreach ($activityTemple as $activityTemple)
        <h3 class="text-3xl font-bold">{{ $activityTemple->temple_event_name }}</h3>
        <div class="card card-compact m-auto p-auto bg-base-200 shadow-xl w-full h-full ">
            <div class="grid gap-5 md:grid-cols-2 grid-cols-1 ">
                <figure><img class="w-25 h-25 " src="https://api.lorem.space/image/movie?w=260&h=400" alt="">
                </figure>
                <div class="card-body">
                    <h2 class="card-title">{{ $activityTemple->temple_event_description }}</h2>

                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">รายละเอียดเพิ่มเติม</button>
                    </div>
                </div>

            </div>
    @endforeach
    </div>

</body>

</html>
