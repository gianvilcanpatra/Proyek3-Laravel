<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"> 

    <title>Add Data</title>
</head>
<body>
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
                  <form action="{{ route('updatedata.pekerjaan', ['id' => $riwayatPekerjaan[0]->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h2 class="header-profil">RIWAYAT PEKERJA</h2>
                    <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
                    <div class="mb-3">
                      <label for="riwayatPekerjaan" class="form-label">Riwayat Pekerjaan</label>
                      <table class="table">
                          <thead>
                              <tr>
                                  <th>Jabatan</th>
                                  <th>Nama Perusahaan</th>
                                  <th>Domisili Perusahaan</th>
                                  <th>Tanggal Mulai</th>
                                  <th>Tanggal Akhir</th>
                              </tr>
                          </thead>
                              
                          <tbody id = "Pekerjaan">
                            @foreach ($riwayatPekerjaan as $item)
                              <tr>
                                  <td><input type="text" class="form-control" name="riwayatPekerjaan[{{ $item->id }}][pekerjaan]" placeholder="Posisi kerja" style="width:200px" value="{{ $item->pekerjaan }}" required></td>
                                  <td><input type="text" class="form-control" name="riwayatPekerjaan[{{ $item->id }}][employer]" placeholder="Perusahaan" value="{{ $item->employer }}" style="width:250px" required></td>
                                  <td><input type="text" class="form-control" name="riwayatPekerjaan[{{ $item->id }}][city]" placeholder="mis. Bandung" value="{{ $item->city }}" required></td>
                                  <td><input type="date" class="form-control" name="riwayatPekerjaan[{{ $item->id }}][mulaikerja]" style="width:130px;" value="{{ $item->mulaikerja }}" required></td>
                                  <td><input type="date" class="form-control" name="riwayatPekerjaan[{{ $item->id }}][akhirkerja]" style="width:130px;" value="{{ $item->akhirkerja }}" required></td>
                              </tr>
                          </tbody>
                        </form>
                          @endforeach
                      </table>
                  </div>
                    <button class="btn btn-info" type="submit">Update</button>
                    {{-- <a href="/deletepekerjaan/{{ $item->id }}" class="btn btn-danger">Delete</a> --}}
                  </div>
</div>
</div>
    </div>
  </div>
  

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
