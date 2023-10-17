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
<h1 class="center">KETERAMPILAN</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                          <div class="container mb-4">
                          <div class="row-1">
                            <form action="/insertdata" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                                @csrf
                                <div class="mb-3">   
                                  <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Pendidikan Formal*</label>
                                      <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                  </div>
                                  <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Jurusan*</label>
                                      <input type="text" name="lastName" class="form-control" id="exampleInputPassword1">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Tahun*</label>
                                    <input type="text" name="lastName" class="form-control" id="exampleInputPassword1">
                                </div>
                                </div>
                              </div>
                              {{-- <button onclick="prevSlide(1)">Kembali</button>
                              <button onclick="nextSlide(2)">Selanjutnya</button> --}}
                        </div>
                      </div>
                     </div>
                  </div>
                </div>
              </div>            