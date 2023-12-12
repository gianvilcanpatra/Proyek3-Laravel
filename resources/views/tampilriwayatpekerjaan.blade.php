@extends('layout.content1')
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Data</title>
</head>

<body>
    @section('card')
    <div class="row justify-content-center">
        <div class="col-10; align-items: center;">
            <div class="card">
                <div class="card-body">
                  <form action="{{ route('updatedata.pekerjaan', ['id' => $riwayatPekerjaan[0]->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div style="display: flex; align-items: center;">
                      <img src="image/network-enterprise_.png" alt="Profil Image"
                          style="margin-right: 15px; width: 30px;">
                      <h2 class="header-profil">RIWAYAT PEKERJAAN</h2>
                    </div>
                    <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
                    <div class="mb-5">
                        <label for="riwayatPekerjaan" class="form-label"></label>
                        <table class="table table-bordered" style="border-color: #f50202">
                            <thead style="background-color:rgb(252, 252, 228);">
                                <tr class="table-bordered" style="border-color: #000000">
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
@endsection
</html>
