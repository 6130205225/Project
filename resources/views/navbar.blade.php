<div class="navbar bg-secondary">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="{{ route('activityall.show') }}">กิจกรรมทั้งหมด</a></li>
                <li><a href="{{ route('reviewall.show') }}">รีวิวทั้งหมด</a></li>
            </ul>
        </div>
        <a href="{{ route('home.show') }}" class=" btn btn-ghost normal-case text-xl">หน้าหลัก</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal p-0">
            <li><a href="{{ route('activityall.show') }}">กิจกรรมทั้งหมด</a></li>
            <li><a href="{{ route('reviewall.show') }}">รีวิวทั้งหมด</a></li>
        </ul>
    </div>

    {{-- 'sessionUser' คือชื่อ session ที่ชื่อว่า sessionUser ที่อยู่ใน Controller --}}
    @if (Session::has('sessionUser'))
        <div class="navbar-end">
            <a href="{{ route('logouthome.show') }}" class="btn">ออกจากระบบ</a>
        </div>
    @else
        <div class="navbar-end">
            <a href="{{ route('login.check') }}" class="btn">เข้าสู่ระบบ</a>
        </div>
    @endif
</div>


{{-- <div class="navbar bg-secondary">
    <div class="navbar-start">
        <div class="dropdown">
            <label class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                <li><a>Item 1</a></li>
                <li tabindex="0">
                    <a class="justify-between">
                        Parent
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
                        </svg>
                    </a>
                    <ul class="p-2">
                        <li><a>กิจกรรมทั้งหมด</a></li>
                        <li><a>รีวิวทั้งหมด</a></li>
                    </ul>
                </li>
                <li><a>Item 3</a></li>
            </ul>
        </div>
        <a href="{{ route('home.show') }}" class=" btn btn-ghost normal-case text-xl">หน้าหลัก</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal p-0">
            <li><a href="{{ route('activityall.show') }}">กิจกรรมทั้งหมด</a></li>
            <li><a href="{{ route('reviewall.show') }}">รีวิวทั้งหมด</a></li>
        </ul>
    </div>
    @if (Session::has('user'))
        <div class="navbar-end">
            <a href="{{ route('logouthome.show') }}" class="btn">ออกจากระบบ</a>
        </div>
    @else
        <div class="navbar-end">
            <a href="{{ route('login.check') }}" class="btn">เข้าสู่ระบบ</a>
        </div>
    @endif

</div> --}}
