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
    @include('navbaradmin')
    <div class="lg:ml-24 lg:mr-24 m-10 ">
        <h1 class="mb-5 text-2xl font-bold  py-5">ตารางจัดการผู้ใช้งาน</h1>
        {{-- {{dd($adminHome);}} --}}
        {{-- <form action="adminuser" method="POST"> --}}
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>user_id</th>
                        <th>user_firstname</th>
                        <th>user_lastname</th>
                        <th>username</th>
                        <th>fk_user_role_id</th>
                        <th></th>
                    </tr>
                </thead>
                <form action="deleteUser" method="POST">
                    @csrf
                    @foreach ($adminHome as $adminHome)
                        <tbody>
                            <tr>
                                <th>{{ $adminHome->user_id }}</th>
                                <td>{{ $adminHome->user_firstname }}</td>
                                <td>{{ $adminHome->user_lastname }}</td>
                                <td>{{ $adminHome->username }}</td>
                                <td>{{ $adminHome->fk_user_role_id }}</td>
                                <td><input type="submit" name="user_id" value="{{ $adminHome->user_id }}"
                                        class="btn btn-error">
                                </td>
                                {{-- <td><input type="submit" class="btn btn-error">ลบผู้ใช้งาน</td> --}}
                            </tr>
                        </tbody>
                    @endforeach
                </form>

            </table>
        </div>
        {{-- </form> --}}
    </div>
</body>

</html>
