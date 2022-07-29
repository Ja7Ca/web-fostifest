<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM WEBINAR FOSTIFEST</title>
    <!-- Icon Title -->
    <link rel="icon" href="{{ asset('asset/logo.png') }}" type="image/x-icon">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Play:wght@400;700&display=swap"
        rel="stylesheet">
</head>

<body id="form-webinar" class="position-relative">
    <section class="d-flex">
        <div
            class="form-webinar-image d-none d-lg-flex justify-content-center align-items-center position-relative border border-1" style="background-image: url({{ asset('asset/bg-form.png') }});">
            {{-- <img src="asset/bg-shadow-form.png" alt=""> --}}
            <img src="asset/image-lock.png" class="position-absolute">
            <div class="form-sosmed position-absolute d-flex flex-column align-items-center">
                <p class="form-sosmed-title">Find Us On</p>
                <div class="form-sosmed-image">
                    <a href="#" class="text-decoration-none">
                        <img src="asset/instagram.png" alt="">
                    </a>
                    <a href="#" class="text-decoration-none">
                        <img src="asset/twitter.png" alt="">
                    </a>
                    <a href="#" class="text-decoration-none">
                        <img src="asset/whatsapp.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="form-webinar-form d-flex flex-column align-items-center">
            <h1 class="form-title">Form Pendaftaran Webinar</h1>
            <p class="form-subtitle text-center">Seluruh informasi yang ada di dalam form bersifat rahasia dan tanda
                <span>*</span> wajib untuk diisi.
            </p>
            <form action="{{ route('registrationWebinar') }}" method="POST" class="text-center" id="wrap-from"
                enctype="multipart/form-data">
                @csrf
                <p class="form-limit text-start ms-4 fw-bold">IDENTITAS</p>
                <div class="input-form position-relative">
                    <p class="label position-absolute">Nama Lengkap</p>
                    <input type="text" name="fullname" id="form-input" class="form-input px-4" placeholder="" required>
                    <span class="req position-absolute">*</span>
                </div>
                <div class="input-form position-relative">
                    <p class="label position-absolute">Email</p>
                    <input type="email" name="email" id="form-input" class="form-input px-4" placeholder="" required>
                    <span class="req position-absolute">*</span>
                </div>
                <div class="input-form position-relative">
                    <p class="label position-absolute">Nomor Whatsapp</p>
                    <input type="number" name="wa" id="form-input" class="form-input px-4" placeholder="" required>
                    <span class="req position-absolute">*</span>
                </div>
                <div class="input-form position-relative">
                    <p class="label position-absolute">Instansi</p>
                    <select class="form-input px-4" name="agency" id="instansi" onChange="getValue()">
                        <option value="ums">Universitas Muhammadiyah Surakarta</option>
                        <option value="umum">Umum</option>
                    </select>
                    <span class="req position-absolute"><i class="fa-solid fa-angle-down"></i></span>
                </div>
                <p class="form-limit text-start ms-4 fw-bold" id="change-bukti">KTM Universitas Muhammadiyah Surakarta
                </p>
                <div class="input-form-file position-relative d-flex align-items-center">
                    <input type="file" name="payment" id="form-input-file" class="custom-file-input" placeholder=""
                        required>
                    <span class="req position-absolute">*</span>
                </div>
                <div id="share-grub" class="">
                    <p class="form-limit text-start ms-4 fw-bold">Share Grub 1</p>
                    <div class="input-form-file position-relative d-flex align-items-center">
                        <input type="file" name="sg1" id="form-input-file" class="custom-file-input" placeholder=""
                            required>
                        <span class="req position-absolute">*</span>
                    </div>
                    <p class="form-limit text-start ms-4 fw-bold">Share Grub 2</p>
                    <div class="input-form-file position-relative d-flex align-items-center">
                        <input type="file" name="sg2" id="form-input-file" class="custom-file-input" placeholder=""
                            required>
                        <span class="req position-absolute">*</span>
                    </div>
                    <p class="form-limit text-start ms-4 fw-bold">Share Grub 3</p>
                    <div class="input-form-file position-relative d-flex align-items-center">
                        <input type="file" name="sg3" id="form-input-file" class="custom-file-input" placeholder=""
                            required>
                        <span class="req position-absolute">*</span>
                    </div>
                </div>
                <input type="submit" value="Kirim" name="submit" class="button-submit">
            </form>
        </div>
    </section>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/1f83e5d847.js" crossorigin="anonymous"></script>
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function getValue(){
            let grub = `<p class="form-limit text-start ms-4 fw-bold">Share Grub 1</p>
                    <div class="input-form-file position-relative d-flex align-items-center">
                        <input type="file" name="grub-1" id="form-input-file" class="custom-file-input" placeholder=""required>
                        <span class="req position-absolute">*</span>
                    </div>
                    <p class="form-limit text-start ms-4 fw-bold">Share Grub 2</p>
                    <div class="input-form-file position-relative d-flex align-items-center">
                        <input type="file" name="grub-2" id="form-input-file" class="custom-file-input" placeholder=""required>
                        <span class="req position-absolute">*</span>
                    </div>
                    <p class="form-limit text-start ms-4 fw-bold">Share Grub 3</p>
                    <div class="input-form-file position-relative d-flex align-items-center">
                        <input type="file" name="grub-3" id="form-input-file" class="custom-file-input" placeholder=""required>
                        <span class="req position-absolute">*</span>
                    </div>`;
            let value = $("#instansi").val();
            let instansi;
            let file;
            if(value == 'ums'){
                instansi = 'KTM Universitas Muhammadiyah Surakarta'
                $("#share-grub").html(grub);
                // $("#share-grub").show();
            } else{
                instansi = 'Bukti Pembayaran'
                $("#share-grub").text("");
                // $("#share-grub").hide();
            }
            $("#change-bukti").text(instansi);
        }
    </script>
</body>

</html>