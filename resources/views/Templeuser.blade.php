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
    {{-- @foreach ($activityTemple as $activityTemple) --}}
        <!-- <div class="hero-overlay bg-opacity-60"> -->
        <h1 class="text-5xl font-bold text-center py-5">รายละเอียด</h1>

        <!-- <div class="hero min-h-screen bg-base-100 "> -->
        <div class="hero-overlay bg-base-100 ">

            <div class="carousel w-full">
                <div id="slide1" class="carousel-item relative w-full">
                    <img src="https://api.lorem.space/image/car?w=800&h=200&hash=8B7BCDC2" class="w-full">
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide4" class="btn btn-circle">❮</a>
                        <a href="#slide2" class="btn btn-circle">❯</a>
                    </div>
                </div>
                <div id="slide2" class="carousel-item relative w-full">
                    <img src="https://api.lorem.space/image/car?w=800&h=200&hash=500B67FB" class="w-full">
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide1" class="btn btn-circle">❮</a>
                        <a href="#slide3" class="btn btn-circle">❯</a>
                    </div>
                </div>
                <div id="slide3" class="carousel-item relative w-full">
                    <img src="https://api.lorem.space/image/car?w=800&h=200&hash=A89D0DE6" class="w-full">
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide2" class="btn btn-circle">❮</a>
                        <a href="#slide4" class="btn btn-circle">❯</a>
                    </div>
                </div>
                <div id="slide4" class="carousel-item relative w-full">
                    <img src="https://api.lorem.space/image/car?w=800&h=200&hash=225E6693" class="w-full">
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide3" class="btn btn-circle">❮</a>
                        <a href="#slide1" class="btn btn-circle">❯</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="text-center">
                    <h1 class="text-5xl font-bold text-center py-5">Box Office News!</h1>
                    <p class="py-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda
                        excepturi
                        exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                </div>
                <div class="grid gap-5 md:grid-cols-2 grid-cols-1 mx-10">
                    <div class="flex w-full px-96 py-5">
                        <button
                            class="grid h-20 flex-grow card bg-base-300 rounded-box place-items-center">กิจกรรม</button>
                        <div class="divider divider-horizontal">OR</div>
                        <button
                            class="grid h-20 flex-grow card bg-base-300 rounded-box place-items-center">รีวิว</button>
                    </div>
                </div>
            </div>
        </div>
    {{-- @endforeach --}}
</body>

</html>
