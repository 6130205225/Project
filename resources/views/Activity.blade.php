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
    @foreach ($activityTwo as $activityTwo)
        <h1 class="text-5xl font-bold text-center py-5">{{ $activityTwo->temple_name }}</h1>
        <h1 class="text-2xl font-bold text-center py-5">{{ $activityTwo->activity_name }}</h1>

        <div class="divider"></div>

            <div class="card card-compact m-auto p-auto bg-base-100 shadow-xl w-full h-full ">
                <figure>
                    <img class="w-w-4/12 h-72 " src="{{ $activityTwo->activity_pic_url }}" alt="">
                </figure>

                <div class="divider"></div>
                <div>
                    <div class="text-center">
                        <h1 class="text-3xl font-bold text-left mx-8 py-5">รายละเอียดของกิจกรรมวัด</h1>
                        <div class="grid gap-5 md:grid-cols-1 grid-cols-1 mx-10">
                            <p class="text-left py-5">{{ $activityTwo->activity_description }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
        @endforeach

        {{-- {{ $searchOneAt }} --}}
</body>

</html>
