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
    {{-- {{dd($showone);}} --}}

    {{-- if เพื่อให้ compact $showone ดูว่า isEmpty() เป็นค่าว่างหรือไม่ ถ้าเป็นค่าว่างให้เข้า if ถ้ามีค่าอยู่แล้วให้เข้า else --}}
    @if ($showone->isEmpty())
        <form action="templeadmin" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="text-3xl font-bold text-center pt-5">จัดการข้อมูลวัดของวัด</h1>
            <div class="lg:ml-24 lg:mr-24 m-10 ">
                <label class="block">
                    <h3 class="font-bold">ชื่อวัด</h3>
                    <input type="text" class="form-input mt-1 block w-full border py-3" placeholder="กรุณากรอกชื่อวัด"
                        id="temple_name" name="temple_name">

                </label>
                <div class="divider"></div>
                <label class="block mt-4">
                    <span class="font-bold">กรุณาเลือกประเภทวัด</span><br>
                    <div>1 = วัดทั่วไป, 2 = วัดป่า</div>
                    <select class="form-select mt-1 block w-full py-3" name="fk_temple_type_id">
                        <option> 1 </option>
                        <option> 2 </option>
                    </select>
                </label>

                <div class="divider"></div>
                <div>
                    <span class="font-bold">เพิ่มรูปภาพ
                        <input type="file" name="uploadphoto" required
                            class="block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100
                        " />
                </div>

                <label class="block mt-6">
                    <span class="font-bold">รายละเอียดของวัด</span>
                    <textarea class="form-textarea mt-1 block w-full border" name="temple_description" rows="15"
                        placeholder="กรุณากรอกรายละเอียดของวัด"></textarea>
                </label>

                <div class="divider"></div>
                <label class="block mt-6">
                    <span class="font-bold">เพิ่มรายละเอียดที่อยู่ของวัด</span>
                    <textarea class="form-textarea mt-1 block w-full border" name="temple_address" rows="5"
                        placeholder="กรุณากรอกรายละเอียดกิจกรรมของวัด"></textarea>
                </label>
                <div class="form-control mt-6 btn btn-success">
                    <button type="submit" value="submit">บันทึก</button>
                </div>
        </form>
    @else
        <form action="templeadminlast" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="text-3xl font-bold text-center pt-5">จัดการข้อมูลวัดของวัด</h1>
            <div class="lg:ml-24 lg:mr-24 m-10 ">
                <label class="block">
                    <h3 class="font-bold">ชื่อวัด</h3>
                    <input type="text" class="form-input mt-1 block w-full border py-3" placeholder="กรุณากรอกชื่อวัด"
                        id="temple_name" name="temple_name" value="{{ $showone[0]['temple_name'] }}">

                </label>
                <div class="divider"></div>
                <label class="block mt-4">
                    <span class="font-bold">กรุณาเลือกประเภทวัด</span><br>
                    <div>1 = วัดทั่วไป, 2 = วัดป่า</div>
                    <select class="form-select mt-1 block w-full py-3" name="fk_temple_type_id">
                        <option {{ $showone[0]['fk_temple_type_id'] == 1  ? 'selected' : '' }}> 1 </option>
                        <option {{ $showone[0]['fk_temple_type_id'] == 2  ? 'selected' : '' }}> 2 </option>
                    </select>
                </label>

                <div class="divider"></div>
                <div>
                    <span class="font-bold">เพิ่มรูปภาพ
                        <input type="file" name="uploadphoto"
                            class="block w-full text-sm text-slate-500
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-semibold
                        file:bg-violet-50 file:text-violet-700
                        hover:file:bg-violet-100
                        " /><img
                            src="{{ $showone[0]['temple_pic_url'] }}" alt="" width="300" height="150"></span>
                </div>

                <label class="block mt-6">
                    <span class="font-bold">รายละเอียดของวัด</span>
                    <textarea class="form-textarea mt-1 block w-full border" name="temple_description" rows="15"
                        placeholder="กรุณากรอกรายละเอียดของวัด">{{ $showone[0]['temple_description'] }}</textarea>
                </label>

                <div class="divider"></div>
                <label class="block mt-6">
                    <span class="font-bold">เพิ่มรายละเอียดที่อยู่ของวัด</span>
                    <textarea class="form-textarea mt-1 block w-full border" name="temple_address" rows="5"
                        placeholder="กรุณากรอกรายละเอียดกิจกรรมของวัด">{{ $showone[0]['temple_address'] }}</textarea>
                </label>
                <div class="form-control mt-6 btn btn-primary">
                    <button type="submit" value="submit">แก้ไข</button>
                </div>
        </form>
    @endif

</body>

</html>
