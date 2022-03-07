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
            <a class="btn">เข้าสู่ระบบ</a>
        </div>
    </div>

    <div class="hero min-h-screen" style="background-image: url(https://cms.dmpcdn.com/travel/2020/08/16/e8cb01a0-df1f-11ea-a0b4-232d08119930_original.jpg);">
        <div class="hero-overlay bg-opacity-60">
            <div class="max-w-full text-center">
                <h1 class="mb-5 text-5xl font-bold text-base-100 py-5">Temple Tourism System In Esan</h1>
                <div class="form-control">
                    <div class="input-group flex flex-wrap items-center justify-center ">
                        <input type="text" placeholder="ค้นหา" class="input input-bordered">
                        <button class="btn btn-square">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- <div class="grid grid-cols-3 grid-rows-1 gap-6 mx-6 my-5">
                <div class="card w-full bg-base-100 shadow-xl">
                    <figure><img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes"></figure>
                    <div class="card-body">
                        <h2 class="card-title">Shoes!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="justify-end card-actions">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="card w-full bg-base-100 shadow-xl md:hidden">
                    <figure><img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes"></figure>
                    <div class="card-body">
                        <h2 class="card-title">Shoes!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="justify-end card-actions">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="card w-full bg-base-100 shadow-xl md:hidden">
                    <figure><img src="https://api.lorem.space/image/shoes?w=400&h=225" alt="Shoes"></figure>
                    <div class="card-body">
                        <h2 class="card-title">Shoes!</h2>
                        <p>If a dog chews shoes whose shoes does he choose?</p>
                        <div class="justify-end card-actions">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div> -->
            <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>

</body>

</html>