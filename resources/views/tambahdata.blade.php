<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
              <img src ="image/Logo2.png"  width="70" height="70"> </a>
          </div>
    </nav>
    <h1 class="text-center mb-4">Isi Profil</h1>
    <div class="container">
        <div class="row justiy-content-center">
          <div class="col-8 justify-content-center">
            <div class="card">
            <div class="card-body">
            <form action="/insertdata" method="POST" enctype="multipart/form-data">
              @csrf   
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp"></div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Last Name</label>
                <input type="text" name="lastName" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jenisKelamin" aria-label="Default select example">
                  <option selected>Jenis Kelamin</option>
                  <option value="cowo">Male</option>
                  <option value="cewe">Female</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nomor Handphone</label>
                <input type="number" name="nomorTelepon" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="email" name="emailUser" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                {{--<input type="checkbox" class="form-check-input" id="exampleCheck1"> --}}
                {{-- <label class="form-check-label" for="exampleCheck1"></label> --}}
              </div>
              <a href="/tampilanawal" type="submit" class="btn btn-danger">Kembali</a>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
          </div>
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
  </body>
</html>