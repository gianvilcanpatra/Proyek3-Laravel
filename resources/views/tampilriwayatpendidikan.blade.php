@extends('layout.content1')

<body>
@section('card')
<div class="row justify-content-center">
    <div class="col-6; align-items: center;">
        <div class="card">
            <div class="card-body">
                  <form action="{{ route('updatedata.pendidikan', ['id' => $riwayatPendidikan[0]->id ]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div style="display: flex; align-items: center;">
                        <img src="image/education_.png" alt="Profil Image" style="margin-right: 15px; width: 30px;">
                        <h2 class="header-profil">EDIT RIWAYAT PENDIDIKAN</h2>
                    </div>
                    <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
                    <div class="container mb-4">
                    <div class="row-1">
                    <div id="formRiwayatContainer">
                    <table class="table table-bordered" style="border-color: #f50202">
                        <thead style="background-color:rgb(252, 252, 228);">
                            <tr class="table-bordered" style="border-color: #000000">
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
@endsection
</html>