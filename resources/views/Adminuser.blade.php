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
        <h1 class="mb-5 text-2xl font-bold  py-5">ตารางจัดการผู้ใช้งาน</h1>
        {{-- {{dd($adminHome);}} --}}
        {{-- <form action="adminuser" method="POST"> --}}
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th class="text-base">ลำดับ</th>
                        <th class="text-base">ชื่อผู้ใช้</th>
                        <th class="text-base">ชื่อ</th>
                        <th class="text-base">นามสุกล</th>
                        <th class="text-base">ประเภท</th>
                        <th class="text-base">จัดการ</th>
                    </tr>
                </thead>
                <form action="deleteUser" method="POST">
                    @csrf
                    @foreach ($adminHome as $adminHome)
                        <tbody>
                            <tr>
                                <th class="form-input w-0.5 border ">{{ $adminHome->user_id }}</th>
                                <td class="form-input w-0.5 border ">{{ $adminHome->username }}</td>
                                <td class="form-input w-0.5 border ">{{ $adminHome->user_firstname }}</td>
                                <td class="form-input w-0.5 border ">{{ $adminHome->user_lastname }}</td>
                                <td class="form-input w-0.5 border ">{{ $adminHome->fk_user_role_id }}</td>
                                    <td class="form-input w-0.5 border ">
                                        <button type="submit"  name="user_id" value="{{ $adminHome->user_id }}">
                                            <i class="material-icons" style="font-size:48px;color:red">delete</i>
                                        </button>
                                    </td>
                                </div>
                            </tr>
                        </tbody>
                    @endforeach
                </form>
            </table>
        </div>
    </div>
</body>

</html>
