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

  <h1 class="center">RIWAYAT PENDIDIKAN</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <form action="/insertdatapendidikan" method="POST" enctype="multipart/form-data"
              onsubmit="return validateForm()">
              @csrf
              <div class="container mb-4">
                <div class="row-1">
                  <div id="formRiwayatContainer">

                    <div class="mb-3">
                      <label for="riwayatPendidikan" class="form-label"></label>
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Nama Sekolah/Universitas</th>
                                  <th>Jurusan</th>
                                  <th>Tahun</th>
                              </tr>
                          </thead>
                          <tbody id="Pendidikan">
                              <tr>
                                  <td><input type="text" class="form-control" name="riwayatPendidikan[0][pendidikanFormal]" placeholder="Nama Sekolah/Universitas" required></td>
                                  <td><input type="text" class="form-control" name="riwayatPendidikan[0][jurusan]" placeholder="jurusan" required></td>
                                  <td><input type="text" class="form-control" name="riwayatPendidikan[0][tahunPendidikan]" placeholder="periode tahun"></td>
                              </tr>
                          </tbody>
                      </table>
                      <button type="button" class="btn btn-secondary" id="tambahRiwayatPendidikan">Tambah Riwayat Pendidikan</button>
                  </div>
          
                  </div>
                  <button class="btn btn-info" type="submit">Submit</button>
                </div>
                <div class="row">
                  <table class="table" style="margin-left: 10px; margin-right: 10px;">
                          <thead>
                              <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Pendidikan Formal</th>
                                  <th scope="col">Jurusan</th>
                                  <th scope="col">Tahun Pendidikan</th>
                              </tr>
                          </thead>
                          <tbody>
                              @php
                                  $no = 1;
                              @endphp      
                                  
                              @foreach ($data as $rowpen)
                              <tr>
                                      <td>{{ $no++ }}</td>
                                      <td>{{ $rowpen->pendidikanFormal }}</td>
                                      <td>{{ $rowpen->jurusan }}</td>
                                      <td>{{ $rowpen->tahunPendidikan }}</td>
                                      <td>
                                          <a href="/tampilriwayatpendidikan/{{ $rowpen->id }}" class="btn btn-info">Edit</a>
                                          <a href="/deletependidikan/{{ $rowpen->id }}" class="btn btn-danger">Delete</a>
                                      </td>
          
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
              </div>
            </form>
            
          </div>
          
        </div>
      </div>
    </div>

            <!-- <div class="buttonPreview">
                <div class="textPreview">
                    <a href="{{ route('preview') }}" class="btn btn-primary">Preview</a>
                </div>
            </div> -->
        </div>
    </div>
    <script>
      let riwayatPendidikanIndex = 1;

    document.getElementById('tambahRiwayatPendidikan').addEventListener('click', function() {
    let newRow = document.createElement('tr');
    newRow.innerHTML = `
        <td><input type="text" class="form-control" name="riwayatPendidikan[${riwayatPendidikanIndex}][pendidikanFormal]" placeholder="Nama Sekolah/Universitas"></td>
        <td><input type="text" class="form-control" name="riwayatPendidikan[${riwayatPendidikanIndex}][jurusan]" placeholder=""></td>
        <td><input type="number" class="form-control" name="riwayatPendidikan[${riwayatPendidikanIndex}][tahunPendidikan]" placeholder=""></td>
    `;
    document.getElementById('Pendidikan').appendChild(newRow);
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

</html>