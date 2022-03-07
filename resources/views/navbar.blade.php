<div class="navbar bg-secondary">
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
        <a href="{{ route('home') }}" class=" btn btn-ghost normal-case text-xl">HOME</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal p-0">
            <!-- <li><a href="{{ route('home') }}">หน้าหลัก</a></li> -->
            <li><a href="{{ route('activities') }}">กิจกรรมทั้งหมด</a></li>
            <li><a href="{{ route('reviews') }}">รีวิวทั้งหมด</a></li>
        </ul>
    </div>
    <div class="navbar-end">
        <a class="btn">เข้าสู่ระบบ</a>
    </div>
</div>
