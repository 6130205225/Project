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
        <h1 class="mb-5 text-2xl font-bold  py-5">ตารางจัดการวัด</h1>
        {{-- <form action="Adminusertree" method="POST"> --}}

        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>activity_id</th>
                        <th>activity_name</th>
                        <th>activity_description</th>
                        {{-- <th>fk_temple_id</th> --}}
                        {{-- <th>fk_temple_type_id</th> --}}
                        <th></th>
                    </tr>
                </thead>
                <form action="deleteActivity" method="POST">
                    @csrf
                    @foreach ($adminctivityhome as $adminctivityhome)
                        <tbody>
                            <tr>
                                <th>{{ $adminctivityhome->activity_id }}</th>
                                <td>{{ $adminctivityhome->activity_name }}</td>
                                <td>{{ $adminctivityhome->activity_description }}</td>
                                {{-- <td>{{ $adminctivityhome->fk_temple_id }}</td> --}}
                                <td><input type="submit" name="activity_id"
                                        value="{{ $adminctivityhome->activity_id }}" class="btn btn-error">
                                </td>
                                {{-- <td><button type="submit" class="btn btn-error">ลบกิจกรรม</button></td> --}}
                            </tr>
                        </tbody>
                    @endforeach
                </form>
            </table>
        </div>

    </div>
</body>

</html>
