<!DOCTYPE html>
<html data-theme="bumblebee">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.2.2/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    @include('navbaradmin')
    <div class="lg:ml-24 lg:mr-24 m-10 ">
        <h1 class="mb-5 text-2xl font-bold  py-5">ตารางจัดการกิจกรรมวัด</h1>
        {{-- <form action="Adminusertree" method="POST"> --}}

        <div class="overflow-x-auto">
            <table class="table w-full" >
                <thead>
                    <tr>
                        <th class="text-base text-center">ลำดับ</th>
                        <th class="text-base text-center">ชื่อกิจกรรม</th>
                        <th class="text-base text-center">รายละเอียดกิจกรรม</th>
                        {{-- <th>fk_temple_id</th> --}}
                        {{-- <th>fk_temple_type_id</th> --}}
                        <th class="text-base text-center">จัดการ</th>
                    </tr>
                </thead>
                <form action="deleteActivity" method="POST">
                    @csrf
                    @foreach ($adminctivityhome as $adminctivityhome)
                        <tbody>
                            <tr>
                                <th class="form-input w-0.5 border text-center">{{ $adminctivityhome->activity_id }}</th>
                                <td class="form-input w-0.5 border text-center">{{ $adminctivityhome->activity_name }}</td>
                                <td class="form-input w-0.5 border text-center">{{ $adminctivityhome->activity_description }}</td>
                                {{-- <td>{{ $adminctivityhome->fk_temple_id }}</td> --}}
                                <td class="form-input w-0.5 border text-center">
                                    <button type="submit"  name="activity_id" value="{{ $adminctivityhome->activity_id }}">
                                        <i class="material-icons" style="font-size:48px;color:red">delete</i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </form>
            </table>
        </div>

    </div>
</body>

</html>
    {{-- <input type="submit" name="activity_id"
    value="{{ $adminctivityhome->activity_id }}" class="btn btn-error"> ปุ่มเก่า --}}
