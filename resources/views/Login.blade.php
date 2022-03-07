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
    @include('navbar')
    <div class="hero min-h-screen bg-base-200">
        <div class="flex-col hero-content lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <!-- <h1 class="text-5xl font-bold">Login now!</h1>
                <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            </div> -->
                <div class="card flex-shrink-0 max-w-xl shadow-2xl bg-base-100">
                    <div class="card-body px-16">
                        <div class="form-control ">
                            <label class="label">
                                <span class="label-text ">เข้าสู่ระบบ</span>
                            </label>
                            <input type="text" placeholder="เข้าสู่ระบบ*" class="input input-bordered w-full px-6">
                        </div>
                        <div class="form-control ">
                            <label class="label">
                                <span class="label-text">รหัสผ่าน</span>
                            </label>
                            <input type="text" placeholder="รหัสผ่าน*" class="input input-bordered w-full px-6">
                            <label class="label ">
                                <a href="#"
                                    class="label-text-alt link link-hover text-primary font-bold">สมัครสมาชิก</a>
                            </label>
                        </div>
                        <!-- <div class="form-control mt-6">
                            <button class="btn btn-primary">เข้าสู่ระบบ</button>
                        </div> -->

                        <label for="my-modal"
                            class="btn modal-button bg-primary-focus btn btn-primary">เข้าสู่ระบบ</label>

                        <!-- Put this part before </body> tag -->
                        <input type="checkbox" id="my-modal" class="modal-toggle">
                        <div class="modal">
                            <div class="modal-box">
                                <p class="py-4 text-center">กรุณากรอกข้อมูล!</p>
                                <div class="modal-action">
                                    <label for="my-modal" class="btn">ตกลง</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>
