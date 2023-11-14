<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    <a href="/profil" class="next-button">Profil</a>
    <a href="/riwayatpendidikan" class="next-button">Riwayat Pendidikan</a>
    <a href="/riwayatpekerjaan" class="next-button">Riwayat Pekerjaan</a>
    <a href="/keterampilan" class="next-button">Keterampilan</a>
    <a href="/dokumenpendukung" class="next-button">Dokumen Pendukung</a>
    <a href="/pengguna" class="next-button">Tampil CV</a>
  </div>
  <h1 class="center">KETERAMPILAN</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="/insertdataketerampilan" method="POST" enctype="multipart/form-data"
              onsubmit="return validateForm()">
              @csrf
              <div class="container mb-4">
                <div class="row-1">
                  <div class="mb-3">
                    <label for="skill" class="form-label">Keahlian</label>
                    <input type="text" name="skill" class="form-control" id="skill" aria-describedby="emailHelp" value="{{ old('skill', $data->first()->skill ?? '') }}">
                  </div>
                  <div class="mb-3">
                    <label for="level" class="form-label">Level Keahlian</label>
                    <select class="form-select" name="level" id="level" aria-label="Default select example" value="{{ old('level', $data->first()->level ?? '') }}">
                      <option selected>{{ old('level', $data->first()->level ?? '') }}</option>
                      <option value="novice">Novice</option>
                      <option value="intermediate">Intermediate</option>
                    </select>
                  </div>
                </div>
                {{-- <button onclick="prevSlide(1)">Kembali</button>
                <button onclick="nextSlide(2)">Selanjutnya</button> --}}
                <button class="btn btn-info" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
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
        alert("Please fill in all required fields in the profile section before proceeding.");
      } else {
        // If all required fields are filled, navigate to the target URL
        window.location.href = targetUrl;
      }
    }
  </script>
</body>