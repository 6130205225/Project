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

                <form action="/search" method="POST">
                    @csrf
                    {{-- <div class="form-control"> --}}
                    <div class="input-group flex flex-wrap items-center justify-center ">
                        <input type="text" placeholder="ค้นหา" name="search" class="input input-bordered ">
                        <button type="submit" class="btn btn-primary">
                            ค้นหา
                        </button>
                    </div>
                    {{-- </div> --}}
                </form>

            </div>

            <div class="grid gap-5 md:grid-cols-3 grid-cols-1 py-5 px-5 ">
                @foreach ($templeHome as $templeHome)
                    <div class="card card-compact m-auto p-auto bg-base-100 shadow-xl w-full h-full ">
                        <figure><img class="w-full h-72 " src="{{ $templeHome->temple_pic_url }}" alt="">
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">{{ $templeHome->temple_name }}</h2>
                            <div class="card-actions justify-end">
                                <div class="divider"></div>


                                <form action="searchtempleOne" method="POST">
                                    @csrf
                                    <input hidden type="text" name="searchTwo" value="{{ $templeHome->temple_id }}">
                                    <button type="submit" class="btn btn-primary">รายละเอียดเพิ่มเติม</button>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="btn-group justify-center">
                <button class="btn btn-active">1</button>
                <button class="btn">2</button>
                <button class="btn">3</button>
                <button class="btn">4</button>
            </div> --}}
        </div>
    </div>
</body>

</html>
