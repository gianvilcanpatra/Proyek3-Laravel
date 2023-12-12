@extends('layout.content1')
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/preview.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap">


    <title>Add Data</title>
</head>

<body>
@section('card')
    @if ($pengguna->count() > 0)
            <div class="row justify-content-center">
                <div class="col-8; align-items: center;">
                    <!-- <div class="card">
                    <div class="card-body">

                        <div class="container mb-4"> -->
                    <div class="cv-container " id="cv-download">
                        <div class="cv">

                            @foreach ($pengguna as $dataPengguna)
                            <div class="profile-container">
                                <div class="profile-info">
                                    <div class="profile-image">
                                        <img src="{{ asset('fotoprofil/'. $dataPengguna->image)}}" alt="">
                                    </div>
                                    <div class="text-profile">
                                        <div class="name-info"> {{ $dataPengguna->firstName }} {{
                                            $dataPengguna->lastName }}
                                        </div>
                                        <div class="role-info">{{ $dataPengguna->deskripsi }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="pengguna-container">
                                <div class="header">
                                    <div class="header-background"></div>
                                    <div class="header-text">PRIBADI</div>
                                </div>
                                <div class="content">
                                    <div class="content-pengguna">
                                        <div class="info">
                                            <div class="info-label">Nama</div>
                                            <div class="info-value">{{ $dataPengguna->firstName }} {{
                                                $dataPengguna->lastName }}</div>
                                        </div>
                                        <div class="info">
                                            <div class="info-label">Nomor Handphone</div>
                                            <div class="info-value">0{{ $dataPengguna->nomorTelepon }}</div>
                                        </div>
                                        <div class="info">
                                            <div class="info-label">Email</div>
                                            <div class="info-value">{{ $dataPengguna->emailUser }}</div>
                                        </div>
                                        <div class="info">
                                            <div class="info-label">Tanggal Lahir</div>
                                            <div class="info-value">{{ $dataPengguna->tanggalLahir }}</div>
                                        </div>
                                        <div class="info">
                                            <div class="info-label">Jenis Kelamin</div>
                                            <div class="info-value">{{ $dataPengguna->gender }}</div>
                                        </div>
                                        <div class="info">
                                            <div class="info-label">Negara</div>
                                            <div class="info-value">{{ $dataPengguna->country }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-container">
                                <div class="description-container">
                                    <div class="description-text">
                                        {{ $dataPengguna->deskripsi }}
                                    </div>
                                </div>
                                <div class="header">
                                    <div class="header-background"></div>
                                    <div class="header-text">PROFIL</div>
                                </div>
                            </div>
                            @endforeach

                            @php
                            $index = 0;
                            $totalPendidikan = count($pendidikan);
                            $marginValue = 10;
                            @endphp

                            @while ($index < $totalPendidikan) <div class="education-container">
                                <div class="content">
                                    <div class="education-box" style="margin-top: {{ $marginValue }}px;">
                                        <div class="info">
                                            <div class="info-label">{{ $pendidikan[$index]->jurusan }}</div>
                                            <div class="info-value-pendidikan">{{
                                                $pendidikan[$index]->tahunPendidikan }}</div>
                                        </div>
                                        <div class="info">
                                            <div class="info-label">{{ $pendidikan[$index]->pendidikanFormal }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header">
                                    <div class="header-background"></div>
                                    <div class="header-text">RIWAYAT PENDIDIKAN</div>
                                </div>
                        </div>
                        @php
                        $index++;
                        $marginValue += 75;
                        @endphp
                        @endwhile

                        @php
                        $index = 0;
                        $totalPekerjaan = count($pekerjaan);
                        $marginValue = 10;
                        @endphp
                        @while ($index < $totalPekerjaan) <div class="pekerjaan-container">
                            <div class="content">
                                <div class="pekerjaan-box" style="margin-top: {{ $marginValue }}px;">
                                    <div class="info">
                                        <div class="info-label">{{ $pekerjaan[$index]->pekerjaan }}</div>
                                        <div class="info-value-pendidikan">{{ $pekerjaan[$index]->mulai }} {{
                                            $pekerjaan[$index]->tahun }} - {{ $pekerjaan[$index]->terakhir }} {{
                                            $pekerjaan[$index]->tambah }}</div>
                                    </div>
                                    <div class="info">
                                        <div class="info-label">{{ $pekerjaan[$index]->employer }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="header">
                                <div class="header-background"></div>
                                <div class="header-text">RIWAYAT PEKERJAAN</div>
                            </div>
                    </div>
                    @php
                    $index++;
                    $marginValue += 55;
                    @endphp
                    @endwhile

                    @php
                    $index = 0;
                    $totalKeterampilan = count($keterampilan);
                    $marginValue = 10;
                    @endphp
                    @while ($index < $totalKeterampilan) <div class="keterampilan-container">
                        <div class="content">
                            <div class="keterampilan-box">
                                <div class="info" style="margin-top: {{ $marginValue }}px;">
                                    <div class="info-label">{{ $keterampilan[$index]->skill }}</div>
                                    <div class="info-value-pendidikan">{{ $keterampilan[$index]->level }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="header">
                            <div class="header-background"></div>
                            <div class="header-text">KETERAMPILAN</div>
                        </div>
                </div>
                @php
                $index++;
                $marginValue += 25;
                @endphp
                @endwhile
            </div>
        </div>
    </div>
   
    </div>

    <!-- </form> -->
    </div>
    

    </div>
    <div class="download">
    <button id="btn-print-this" class="btn btn-success btn-lg">Download</button>
    </div>

    </div>
    @else
    <div class="no-data-message">
        Anda belum mengisi data, silahkan untuk
        <a href="/profil">mengisi!</a>
    </div>
    @endif
    </div>
    </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('js/printThis.js') }}"></script>
    <script src="{{ asset('js/costum.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/printThis/1.15.0/printThis.min.js"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
    <style>
        .prev-next-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .prev-button,
        .next-button {
            color: #000000;
            border: none;
            /* padding: 10px 20px; */
            cursor: pointer;
            font-size: 18px;
            margin-right: 10px;
            background: transparent;
            cursor: pointer;
            text-decoration: underline;
        }

        .prev-button:hover,
        .next-button:hover {
            text-decoration: none;
            /* Menghapus garis bawah pada hover (opsional) */
            color: #0056b3;
            /* Warna teks pada hover */
            background: transparent;
        }

        .slide-form {
            display: none;
        }
    </style>


    <script>


        function validate         var tanggalLahir = document.getElementById("tanggalLahir").value;

        // Buat objek Date dari input tanggal lahir
        var dob = new Date(tanggalLahir);
        var today = new Date();

        // Hitung usia
        var age = today.getFullYear() - dob.getFullYear();

        // Periksa apakah tanggal lahir valid
        if (isNaN(age) || age < 0) {
            //   alert("Tanggal lahir tidak valid.");
            return false;
        }

        return true;
        }

        var currentSlide = 1;

        function showSlide(n) {
            var slides = document.getElementsByClassName("slide-form");
            if (n < 1) {
                currentSlide = 1;
            }
            if (n > slides.length) {
                currentSlide = slides.length;
            }
            for (var i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[currentSlide - 1].style.display = "block";
        }

        function goToSlide(n) {
            currentSlide = n;
            showSlide(n);
        }

        showSlide(1);

        function validateProfileAndNavigate(targetUrl) {
            // Add additional validation logic here
            var firstName = document.getElementsByName("firstName")[0].value;
            var lastName = document.getElementsByName("lastName")[0].value;
            var nomorTelepon = document.getElementsByName("nomorTelepon")[0].value;
            var emailUser = document.getElementsByName("emailUser")[0].value;
            var tanggalLahir = document.getElementById("tanggalLahir").value;
            var gender = document.getElementsByName("gender")[0].value;
            var country = document.getElementsByName("country")[0].value;
            var address = document.getElementsByName("address")[0].value;

            // Check if any of the required fields are empty
            if (firstName === '' || lastName === '' || nomorTelepon === '' || emailUser === '' || tanggalLahir === '' || gender === '' || country === '' || address === '') {
                alert("Dimohon untuk mengisi Data Profil terlebih dahulu.");
            } else {
                // If all required fields are filled, navigate to the target URL
                window.location.href = targetUrl;
        }


    </script>

</body>
@endsection

</html>