@extends('layout.sidebar')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="{{ asset('css/tampilanawal.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="container mt-5">
                        <h1><img src="image/gambar1.png" width="300" height="200"
                                style="position: absolute; bottom: 0; right: 0 ; top:0;transform: translatey(50%); margin-right: 100px; ">
                            WELCOME TO MY CV CREATOR</h1>
                        <h2 style="position: relative;">
                            MY CV
                            <img src="image/gambar2.png" width="600" height="400"
                                style="position: absolute; top: -100%; right: 0;  transform: translatey(-20%); margin-right:200px;">
                        </h2>
                        <h2>CREATOR</h2>
                        <img src="image/gambar3.png" width="600" height="400"
                            style="position: absolute; top: 30%; right: 0;  transform: translatey(20%); margin-right:10px;">
                        <h3> <span id="typed-text"></span></h3>
                        <img src="image/gambar1.png" width="300" height="200"
                            style="position: absolute; bottom: 0; right: 0 ; top:0;transform: translatey(200%); margin-right: 500px; ">
                    </div>

                </div>
            </div>
        </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script>
        const typedTextElement = document.getElementById("typed-text");
        const text = "This website helps you make CV writing easier!";
        let index = 0;

        function typeWriter() {
            if (index < text.length) {
                typedTextElement.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeWriter, 100);
            } else {

                index = 0;
                typedTextElement.innerHTML = "";
                setTimeout(typeWriter, 100);
            }
        }
        window.onload = function () {
            typeWriter();
        };
    </script>
 @endsection
</body>
</head>