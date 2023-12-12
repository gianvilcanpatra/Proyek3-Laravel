@extends('layout.content1')

<body>
@section('card')
<div class="row justify-content-center">
    <div class="col-8; align-items: center;">
        <div class="card">
            <div class="card-body">
                <form action="/insertdatapendidikan" method="POST" enctype="multipart/form-data"
                    onsubmit="return validateForm()">
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <div style="display: flex; align-items: center;">
                        <img src="image/education_.png" alt="Profil Image" style="margin-right: 15px; width: 30px;">
                        <h2 class="header-profil">RIWAYAT PENDIDIKAN</h2>
                    </div>
                    <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
                    @csrf
                    <div class="container mb-4">
                        <div class="row-1">
                            <div id="formRiwayatContainer">

                                <div class="mb-5">
                                    <label for="riwayatPendidikan" class="form-label"></label>
                                    <table class="table table-bordered" style="border-color: #f50202">
                                        <thead style="background-color:rgb(252, 252, 228);">
                                            <tr class="table-bordered" style="border-color: #000000">
                                                <th>Nama Sekolah/Universitas</th>
                                                <th>Jurusan</th>
                                                <th>Tahun</th>
                                            </tr>
                                        </thead>
                                        <tbody id="Pendidikan">
                                            <tr>
                                                <td><input type="text" class="form-control"
                                                        name="riwayatPendidikan[0][pendidikanFormal]"
                                                        placeholder="Nama Sekolah/Universitas" required></td>
                                                <td><input type="text" class="form-control"
                                                        name="riwayatPendidikan[0][jurusan]" placeholder="jurusan"
                                                        required></td>
                                                <td><input type="text" class="form-control"
                                                        name="riwayatPendidikan[0][tahunPendidikan]"
                                                        placeholder="periode tahun"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-info" id="tambahRiwayatPendidikan"
                                        style="width: 120px;">
                                        <img src="image/plus_.png" alt="Icon"
                                            style="vertical-align: middle; margin-right: 10px; width: 20px;">
                                        Tambah
                                    </button>
                                    <button class="btn btn-success" style="float: right;" type="submit">
                                        Submit</button>
                                </div>



                            </div>

                            <div class="row" style="width: 1060px;">
                                <table class="table" style="margin-left: 10px; margin-right: 10px;">
                                    <thead class="thead-dark" >
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Pendidikan Formal</th>
                                            <th scope="col">Jurusan</th>
                                            <th scope="col">Tahun Pendidikan</th>
                                            <th scope="col">Action</th>
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
                                                
                                                <a href="/deletependidikan/{{ $rowpen->id }}"
                                                    class="btn btn-danger">Delete</a>

                                            </td>

                                        </tr>

                                    </tbody>
                                    
                                    @endforeach
                                </table>
                            </div>
                            <a href="/tampilriwayatpendidikan"
                                class="btn btn-warning text-black">Edit</a>
                </form>

            </div>

        </div>
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
@endsection
</body>