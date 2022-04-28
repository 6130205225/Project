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
    <h1 class="text-3xl font-bold text-center pt-5">จัดการรายละเอียดของวัด</h1>
    <div class="lg:ml-24 lg:mr-24 m-10 ">
        <label class="block">
            <h3 class="font-bold">ชื่อวัด</h3>
            <input type="text" class="form-input mt-1 block w-full border py-3" placeholder="ชื่อวัด">
        </label>
        <div class="divider"></div>
        <label class="block mt-4">
            <span class="font-bold">กรุณาเลือกประเภทวัด</span><br>
            <select class="form-select mt-1 block w-full py-3">
                <option>วัดทั่วไป</option>
                <option>วัดป่า</option>
            </select>
        </label>
        <div class="divider"></div>
        <label class="block mt-6">
            <span class="font-bold">รายละเอียดของวัด</span>
            <textarea class="form-textarea mt-1 block w-full border " rows="15" placeholder="รายละเอียดของวัด"></textarea>
        </label>
    </div>

</body>

</html>
