@php
    $userData = session('userData')[0]; // Ambil data pengguna pertama dari session
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
              <img src ="image/Logo2.png"  width="70" height="70"> </a>
          </div>
    </nav>
    <div class="preview">
        <div class="bodyEdit">
        <div class="cv">
                <div class="horizontal">
                    <img src="image/Logo2.png" alt="Deskripsi Gambar">
                    <div class="bodyLeft">
                        <div class="Description">
                            <div class="headDesc">
                                <h1> PROFILE </h1>
                                <div class="line"></div>
                            </div>
                            <p>Saya adalah ....</p>
                        </div>
                        <div class="Contact">
                            <div class="headCont">
                                <h2> CONTACT </h2>
                                <div class="line"></div>
                            </div>
                            <h5>{{ $userData->address }}</h5>
                            <h6>{{ $userData->nomorTelepon }}</h6>
                            <h7>{{ $userData->emailUser }}</h7>
                        </div>
                    </div>
                </div>
                <div class="vertical">
                    <div class="boxName">
                        <div class="name">
                        <h3>{{ $userData->firstName }}</h3>
                        <h4>{{ $userData->lastName }}</h4>
                        </div>
                        <h5>Student</h5>
                    </div>
                </div>
        </div>
        </div>
    </div>
</body>
</html>
