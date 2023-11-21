<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

  <title>Add Data</title>
</head>

<body class="d-flex">
  <nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">
              <img src="image/home.png" width="50" height="50" alt="Home">
          </a>
      </div>
  
 
  <nav id="sidebar" style="text-align: left;">
      <ul class="prev-next-list">
          <li><a href="/profil" class="next-button" style="color: black; font-size: 19px;">Profil</a></li>
          <li><a href="/riwayatpendidikan" class="next-button" style="color: black; font-size: 19px;">Riwayat Pendidikan</a></li>
          <li><a href="/riwayatpekerjaan" class="next-button" style="color: black; font-size: 19px;">Riwayat Pekerjaan</a></li>
          <li><a href="/keterampilan" class="next-button" style="color: black; font-size: 19px;">Keterampilan</a></li>
          <li><a href="/dokumenpendukung" class="next-button" style="color: black; font-size: 19px;">Dokumen Pendukung</a></li>
          <li><a href="/pengguna" class="next-button" style="color: black; font-size: 19px;">Tampil CV</a></li>
      </ul>
  </nav>
</nav>

<div class="container">
  <div class="row justify-content-center">
      <div class="col-8">
          <div class="card">
              <div class="card-body">
            <form action="/insertdataketerampilan" method="POST" enctype="multipart/form-data"
              onsubmit="return validateForm()">
              <h2 class="header-profil">KETERAMPILAN</h2>
              <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
              @csrf

              <div class="mb-3">
                <label for="Keteramapilan" class="form-label"></label>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Keahlian</th>
                            <th>Level</th>
                        </tr>
                    </thead>
                    <tbody id="Keterampilan">
                        <tr>
                            <td><input type="text" class="form-control" name="Keterampilan[0][skill]" placeholder="Keahlian"></td>
                            <td><select class="form-select" name="Keterampilan[0][level]">
                              <option value="Novice">Novice</option>
                              <option value="Intermediate">Intermediate</option>
                          </select></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="button" class="btn btn-secondary" id="tambahKeterampilan">Tambah</button>
                {{-- <button onclick="prevSlide(1)">Kembali</button>
                <button onclick="nextSlide(2)">Selanjutnya</button> --}}
                <button class="btn btn-info" style="float:right" type="submit">Submit</button>
              
            </form>
        <div class="row">
        <table class="table" style="margin-left: 10px; margin-right: 10px;">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Skill</th>
                        <th scope="col">Level</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $rowket)
                    <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $rowket->skill }}</td>
                            <td>{{ $rowket->level }}</td>
                            <td>
                                <a href="/tampilketerampilan/{{ $rowket->id }}" class="btn btn-info">Edit</a>
                                <a href="/deleteketerampilan/{{ $rowket->id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- <div class="buttonPreview">
                <div class="textPreview">
                    <a href="{{ route('preview') }}" class="btn btn-primary">Preview</a>
                </div>
            </div> -->
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  
  <script>
    let KeterampilanIndex = 1;

  document.getElementById('tambahKeterampilan').addEventListener('click', function() {
  let newRow = document.createElement('tr');
  newRow.innerHTML = `
                      <tr>
                      <td><input type="text" class="form-control" name="Keterampilan[${KeterampilanIndex}][skill]" placeholder="Keahlian"></td>
                      <td><select class="form-select" name="Keterampilan[${KeterampilanIndex}][level]">
                        <option value="Novice">Novice</option>
                        <option value="Intermediate">Intermediate</option>
                      </select></td>
                      </tr>
                      `;
  document.getElementById('Keterampilan').appendChild(newRow);
  riwayatPekerjaanIndex++;
  });
  </script>

  <script src="{{ asset('admin') }}/vendors/base/vendor.bundle.base.js"></script>
  <script src="{{ asset('admin') }}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{ asset('admin') }}/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{ asset('admin') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="{{ asset('admin') }}/js/off-canvas.js"></script>
  <script src="{{ asset('admin') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('admin') }}/js/template.js"></script>
  <script src="{{ asset('admin') }}/js/dashboard.js"></script>
  <script src="{{ asset('admin') }}/js/data-table.js"></script>
  <script src="{{ asset('admin') }}/js/jquery.dataTables.js"></script>
  <script src="{{ asset('admin') }}/js/dataTables.bootstrap4.js"></script>
  <script src="{{ asset('admin') }}/js/jquery.cookie.js" type="text/javascript">
  </script>

</body>