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
     @foreach ($activityUser as $activityUser)
    <h1 class="text-5xl font-bold text-center py-5">กิจกรรม</h1>
    <div class="hero min-h-min bg-base-200 shadow-2xl py-5">
        <div class="hero-content flex-col lg:flex-row">
            <div class="w-64 carousel rounded-box">
                <div class="carousel-item w-full">
                    <img src="https://api.lorem.space/image/game?w=256&h=400&hash=8B7BCDC2" class="w-full"
                        alt="Tailwind CSS Carousel component">
                </div>
            </div>
            <div>
                <p class="py-6">Provident cupiditate voluptatem et in. Quaerat </p>

            </div>
        </div>
    </div>
    @endforeach
</body>

</html>
