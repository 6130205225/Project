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
        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                    <tr>
                        <th>temple_id</th>
                        <th>temple_name</th>
                        <th>temple_description</th>
                        <th>temple_address</th>
                        {{-- <th>fk_temple_type_id</th> --}}
                        <th></th>
                    </tr>
                </thead>
                <form action="deleteTemple" method="POST">
                    @csrf
                    @foreach ($admintempleuerone as $admintempleuerone)
                        <tbody>
                            <tr>
                                <th>{{ $admintempleuerone->temple_id }}</th>
                                <td>{{ $admintempleuerone->temple_name }}</td>
                                <td>{{ $admintempleuerone->temple_description }}</td>
                                <td>{{ $admintempleuerone->temple_address }}</td>
                                {{-- <td>{{ $admintempleuerone->fk_temple_type_id }}</td> --}}
                                <td><input type="submit" name="temple_id" value="{{ $admintempleuerone->temple_id }}"
                                        class="btn btn-error">
                                </td>
                                {{-- <td><button type="submit" class="btn btn-error">ลบวัด</button></td> --}}
                            </tr>
                        </tbody>
                    @endforeach
                </form>
            </table>
        </div>
    </div>
</body>

</html>
