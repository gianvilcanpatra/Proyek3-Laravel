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
                    <form action="/insertdatapekerjaan" method="POST" enctype="multipart/form-data"
                        onsubmit="return validateForm()">
                        @csrf
                        <div style="display: flex; align-items: center;">
                            <img src="image/network-enterprise_.png" alt="Profil Image"
                                style="margin-right: 15px; width: 30px;">
                            <h2 class="header-profil">RIWAYAT PEKERJAAN</h2>
                        </div>
                        <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
                        <div class="mb-3">
                            <label for="riwayatPekerjaan" class="form-label"></label>
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
                                <tbody id="Pekerjaan">
                                    <tr>
                                        <td><input type="text" class="form-control"
                                                name="riwayatPekerjaan[0][pekerjaan]" placeholder="Posisi kerja"
                                                style="width:200px" required></td>
                                        <td><input type="text" class="form-control" name="riwayatPekerjaan[0][employer]"
                                                placeholder="Perusahaan" style="width:250px" required></td>
                                        <td><input type="text" class="form-control" name="riwayatPekerjaan[0][city]"
                                                placeholder="mis. Bandung" required></td>
                                        <td><input type="date" class="form-control"
                                                name="riwayatPekerjaan[0][mulaikerja]" style="width:130px;" required>
                                        </td>
                                        <td><input type="date" class="form-control"
                                                name="riwayatPekerjaan[0][akhirkerja]" style="width:130px;" required>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-info" id="tambahRiwayatPekerjaan" style="width: 120px;">
                            <img src="image/plus_.png" alt="Icon"
                                style="vertical-align: middle; margin-right: 10px; width: 20px;">
                            Tambah
                        </button>

                        <button class="btn btn-success" style="float: right;" type="submit">
                            Submit</button>
                    </form>
                    <div class="row mt-5">
                        <table class="table" style="margin-left: 10px; margin-right: 10px;">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Perusahaan</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">Awal bekerja</th>
                                    <th scope="col">Akhir bekerja</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($data as $rowpek)
                                <tr>

                                    <td>{{ $no++ }}</td>
                                    <td>{{ $rowpek->pekerjaan }}</td>
                                    <td>{{ $rowpek->employer }}</td>
                                    <td>{{ $rowpek->city }}</td>
                                    <td>{{ $rowpek->mulaikerja }}</td>
                                    <td>{{ $rowpek->akhirkerja }}</td>
                                    <td>
                                        <a href="/tampilriwayatpekerjaan/{{ $rowpek->id }}"
                                            class="btn btn-warning">Edit</a>
                                        <a href="/deletepekerjaan/{{ $rowpek->id }}" class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- <button onclick="prevSlide(1)">Kembali</button>
                    <button onclick="nextSlide(2)">Selanjutnya</button> --}}
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script>
        let riwayatPekerjaanIndex = 1;

        document.getElementById('tambahRiwayatPekerjaan').addEventListener('click', function () {
            let newRow = document.createElement('tr');
            newRow.innerHTML = `
          <td><input type="text" class="form-control" name="riwayatPekerjaan[${riwayatPekerjaanIndex}][pekerjaan]" placeholder="Posisi kerja" style="width:200px" required></td>
          <td><input type="text" class="form-control" name="riwayatPekerjaan[${riwayatPekerjaanIndex}][employer]" placeholder="Perusahaan" style="width:250px" required></td>
          <td><input type="text" class="form-control" name="riwayatPekerjaan[${riwayatPekerjaanIndex}][city]" placeholder="mis. Bandung" required></td>
          <td><input type="date" class="form-control" name="riwayatPekerjaan[${riwayatPekerjaanIndex}][mulaikerja]" style="width:130px;" required></td>
          <td><input type="date" class="form-control" name="riwayatPekerjaan[${riwayatPekerjaanIndex}][akhirkerja]" style="width:130px;" required></td>
          `;
            document.getElementById('Pekerjaan').appendChild(newRow);
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
    @endsection
</body>

</html>