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
    <div class="navbar bg-secondary">
        <div class="navbar-start">
            <div class="dropdown">
                <label class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                    <li><a>Item 1</a></li>
                    <li tabindex="0">
                        <a class="justify-between">
                            Parent
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2">
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    <li><a>Item 3</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost normal-case text-xl">Temple Tourism System In Esan</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal p-0">
                <li><a>หน้าหลัก</a></li>
                <li><a>กิจกรรมทั้งหมด</a></li>
                <li><a>รีวิวทั้งหมด</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="btn">ออกจากระบบ</a>
        </div>
    </div>

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
                <p class="py-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            </div>
            <div class="flex w-full px-96 py-5">
                <button class="grid h-20 flex-grow card bg-base-300 rounded-box place-items-center">กิจกรรม</button>
                <div class="divider divider-horizontal">OR</div>
                <button class="grid h-20 flex-grow card bg-base-300 rounded-box place-items-center">รีวิว</button>
            </div>
        </div>

    </div>

</body>

</html>