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
    @include('navbartemple')


    {{-- if เพื่อให้ compact $showtwo ดูว่า isEmpty() เป็นค่าว่างหรือไม่ ถ้าเป็นค่าว่างให้เข้า if ถ้ามีค่าอยู่แล้วให้เข้า else --}}
    @if ($showtwo->isEmpty())
        <form action="activityTemple" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="text-3xl font-bold text-center pt-5">เพิ่มกิจกรรมของวัด</h1>
            <div class="lg:ml-24 lg:mr-24 m-10 ">
                <label class="block">
                    <h3 class="font-bold">ชื่อกิจกรรม</h3>
                    <input type="text" name="activity_name" class="form-input mt-1 block w-full border py-3"
                        placeholder="กรุณากรอกชื่อกิจกรรม">
                </label>
                <div class="divider"></div>
                <div>
                    <span class="font-bold">เพิ่มรูปภาพ

                        <input type="file" name="uploadphototwo" required
                            class="block w-full text-sm text-slate-500
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-violet-50 file:text-violet-700
                hover:file:bg-violet-100
                " /></span>
                </div>
                <div class="divider"></div>
                <label class="block mt-6">
                    <span class="font-bold">รายละเอียดกิจกรรมของวัด</span>
                    <textarea class="form-textarea mt-1 block w-full border" name="activity_description" rows="15"
                        placeholder="กรุณากรอกรายละเอียดกิจกรรมของวัด"></textarea>
                </label>

                <div class="form-control mt-6 btn btn-success">
                    <button type="submit" value="submit">บันทึก</button>
                </div>
            </div>
        </form>
    @else
        <form action="activityTemplelast" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="text-3xl font-bold text-center pt-5">เพิ่มกิจกรรมของวัด</h1>
            <div class="lg:ml-24 lg:mr-24 m-10 ">
                <label class="block">
                    <h3 class="font-bold">ชื่อกิจกรรม</h3>
                    <input type="text" name="activity_name" class="form-input mt-1 block w-full border py-3"
                        placeholder="กรุณากรอกชื่อกิจกรรม" value="{{ $showtwo[0]['activity_name'] }}">
                </label>
                <div class="divider"></div>
                <div>
                    <span class="font-bold">เพิ่มรูปภาพ

                        <input type="file" name="uploadphototwo"
                            class="block w-full text-sm text-slate-500
            file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-violet-50 file:text-violet-700
            hover:file:bg-violet-100
            " /></span>
                </div>
                <div class="divider"></div>
                <label class="block mt-6">
                    <span class="font-bold">รายละเอียดกิจกรรมของวัด</span>
                    <textarea class="form-textarea mt-1 block w-full border" name="activity_description" rows="15"
                        placeholder="กรุณากรอกรายละเอียดกิจกรรมของวัด">{{ $showtwo[0]['activity_description'] }}</textarea>
                </label>

                <div class="form-control mt-6 btn btn-primary">
                    <button type="submit" value="submit">แก้ไข</button>
                </div>
            </div>
        </form>
    @endif
</body>

</html>
