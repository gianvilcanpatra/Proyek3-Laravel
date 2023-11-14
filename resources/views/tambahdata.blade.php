<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/tambahdata.css') }}"> 

    <title>Add Data</title>
</head>
<body>    
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="image/home.png" width="50" height="50">
        </a>
    </div>
</nav>
<div class="prev-next-buttons">
    <button onclick="goToSlide(1)" class="next-button">Profil</button>
    <button onclick="goToSlide(2)" class="next-button">Riwayat Pendidikan</button>
    <button onclick="goToSlide(3)" class="next-button">Riwayat Pekerjaan</button>
    <button onclick="goToSlide(4)" class="next-button">Keterampilan</button>
    <button onclick="goToSlide(5)" class="next-button">Dokumen Pendukung</button>
</div>
<div class="slide-form" id="slide-1">
    @include('profil')
</div>
<div class="slide-form" id="slide-2">
    @include('riwayatpendidikan')   
</div>
<div class="slide-form" id="slide-3">
    @include('riwayatpekerjaan')
</div>    
<div class="slide-form" id="slide-4">
    @include('keterampilan')
</div>            
<div class="slide-form" id="slide-5">
    @include('dokumenpendukung')
</div>
</div>   

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
        text-decoration: none; /* Menghapus garis bawah pada hover (opsional) */
        color: #0056b3; /* Warna teks pada hover */
        background: transparent; 
    }

    .slide-form {
        display: none;
    }
</style>



<script>



  // Tambahkan nomor urut di atas inputan pendidikan formal



    function validateForm() {
        var tanggalLahir = document.getElementById("tanggalLahir").value;
        
        // Buat objek Date dari input tanggal lahir
        var dob = new Date(tanggalLahir);
        var today = new Date();
    
        // Hitung usia
        var age = today.getFullYear() - dob.getFullYear();
    
        // Periksa apakah tanggal lahir valid
        if (isNaN(age) || age < 0) {
          alert("Tanggal lahir tidak valid.");
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


</script>
</body>
</html>