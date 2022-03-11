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
    {{-- <img src="https://i.pinimg.com/736x/83/01/1c/83011ceb5ba721bc7e251a763181783e.jpg" alt=""> --}}
    <h1 class="text-5xl font-bold text-center py-5">รีวิวทั้งหมด</h1>

    @foreach ($reviewtemple as $reviewtemple)
        <div class="card card-compact bg-base-100 shadow-sm mx-10 my-10">
            <div class="grid gap-5 md:grid-cols-3 grid-cols-1 mx-10">
                <img class="w-4/5 h-48" src=" {{ $reviewtemple->review_pic_url }}" alt="">

                {{-- เป็นการดึงจาก Array ที่ชื่อว่า review_pic_url --}}

                <div class="card-body ">
                    <h3 class="text-3xl font-bold">{{ $reviewtemple->review_topic }}</h3>
                    <h2 class="card-title">{{ $reviewtemple->review_description }}</h2>
                </div>
                <div class="card-actions justify-end">
                    <a href="{{ route('reviews.create') }}" class="btn btn-primary">รายละเอียดเพิ่มเติม</a>
                </div>
            </div>
            <div class="divider"></div>
        </div>
    @endforeach



</body>

</html>
