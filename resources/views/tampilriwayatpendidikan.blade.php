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

                  <form action="{{ route('updatedata.pendidikan', ['id' => $riwayatPendidikan[0]->id ]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
        
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Sekolah/Universitas</th>
                                <th>Jurusan</th>
                                <th>Tahun</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($riwayatPendidikan as $item)
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" name="pendidikan[{{ $item->id }}][pendidikanFormal]" placeholder="Nama Sekolah/Universitas" value="{{ $item->pendidikanFormal }}" required>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="pendidikan[{{ $item->id }}][jurusan]" placeholder="Jurusan" value="{{ $item->jurusan }}" required>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="pendidikan[{{ $item->id }}][tahunPendidikan]" placeholder="Periode Tahun" value="{{ $item->tahunPendidikan }}">
                                    </td>
                                    <td>
                                        <!-- Action buttons for each row -->
                                        <a href="/deletependidikan/{{ $item->id }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button class="btn btn-info" type="submit">Update</button>
                </form>
            </div>
    </div>
      
          <script>
              let riwayatPendidikanIndex = 1;
      
              document.getElementById('tambahRiwayatPendidikan').addEventListener('click', function () {
                  let newRow = document.createElement('tr');
                  newRow.innerHTML = `
                      <td><input type="text" class="form-control" name="riwayatPendidikan[${riwayatPendidikanIndex}][pendidikanFormal]" placeholder="Nama Sekolah/Universitas"></td>
                      <td><input type="text" class="form-control" name="riwayatPendidikan[${riwayatPendidikanIndex}][jurusan]" placeholder="Jurusan"></td>
                      <td><input type="text" class="form-control" name="riwayatPendidikan[${riwayatPendidikanIndex}][tahunPendidikan]" placeholder="Periode Tahun"></td>
                  `;
                  document.getElementById('Pendidikan').appendChild(newRow);
                  riwayatPendidikanIndex++;
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