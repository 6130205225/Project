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
    @foreach ($Tworeview as $Tworeview)
        <h1 class="text-5xl font-bold text-center py-5">{{ $Tworeview->review_topic }}</h1>
        <div class="divider"></div>

            <div class="card card-compact m-auto p-auto bg-base-100 shadow-xl w-full h-full ">
                <figure>
                    <img class="w-w-4/12 h-72 " src="{{ $Tworeview->review_pic_url }}" alt="">
                </figure>

                <div class="divider"></div>
                <div>
                    <div class="text-center">
                        <h1 class="text-3xl font-bold text-left mx-8 py-5">รายละเอียดการรีวิว</h1>
                        <div class="grid gap-5 md:grid-cols-1 grid-cols-1 mx-10">
                            <p class="py-5">{{ $Tworeview->review_description }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
        @endforeach
</body>

</html>
