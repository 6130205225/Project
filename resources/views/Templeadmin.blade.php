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
    {{-- <form action="templeadmin" method="POST"> --}}
    @csrf
    <h1 class="text-3xl font-bold text-center pt-5">จัดการรายละเอียดของวัด</h1>
    <div class="lg:ml-24 lg:mr-24 m-10 ">
        <label class="block">
            <h3 class="font-bold">ชื่อวัด</h3>
            <input type="text" class="form-input mt-1 block w-full border py-3" placeholder="กรุณากรอกชื่อวัด"
                id="temple_name" name="temple_name" value="{{ old('temple_name') }}">

        </label>
        <div class="divider"></div>
        {{-- <label class="block mt-4">
            <span class="font-bold">กรุณาเลือกประเภทวัด</span><br>
            <select class="form-select mt-1 block w-full py-3">
                <option>วัดทั่วไป</option>
                <option>วัดป่า</option>
            </select>
        </label> --}}

        <div class="form-control">
            <label class="cursor-pointer label">
                <input type="radio" id="templeUone" name="fk_temple_type_id" value="3" class="radio checked:bg-blue-500">
                <span class="label-text">วัดทั่วไป</span>
                <input type="radio" id="templeUtwo" name="fk_temple_type_id" value="2"
                    class="radio checked:bg-blue-500">
                <span class="label-text">วัดป่า</span>
            </label>
        </div>

        <div class="divider"></div>
        <div>
            <span class="font-bold">เพิ่มรูปภาพ</span>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <input type="file" name="file[]" accept="image/png, image/gif, image/jpeg" multiple>
                <input type="submit" value="อัพโหลด">
            </form>
        </div>

        <label class="block mt-6">
            <span class="font-bold">รายละเอียดของวัด</span>
            <textarea class="form-textarea mt-1 block w-full border" rows="15" placeholder="กรุณากรอกรายละเอียดของวัด"
                id="temple_description" name="temple_description" value="{{ old('temple_description') }}">
            </textarea>
        </label>
        <div class="form-control mt-6 btn btn-primary">
            <button type="submit" value="submit">บันทึก</button>
        </div>
    </div>
    </form>
</body>

</html>
