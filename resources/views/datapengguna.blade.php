<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <title>Hello, world!</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="image/home.png" width="70" height="70">
            </a>
        </div>
    </nav>
    <h1 class="text-center mb-4">Isi Data Profil</h1>

    <div class="container">
        <div class="row">
        <table class="table" style="margin-left: 10px; margin-right: 10px;">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">No Handphone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">Country</th>
                        <th scope="col">Description</th>
                        <th scope="col">Skill</th>
                        <th scope="col">Level</th>
                        <th scope="col">Download Document</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>
                                <img src="{{ asset('fotoprofil/'. $row->image)}}" alt="" style="width: 40px;">
                            </td>
                            <td>{{ $row->firstName }}</td>
                            <td>{{ $row->lastName }}</td>
                            <td>{{ $row->gender }}</td>
                            <td>{{ $row->address }}</td>
                            <td>0{{ $row->nomorTelepon }}</td>
                            <td>{{ $row->emailUser }}</td>
                            <td>{{ $row->tanggalLahir }}</td>
                            <td>{{ $row->country }}</td>
                            <td>{{ $row->deskripsi }}</td>
                    @endforeach        
                    
                    @foreach ($dataKeterampilan as $rowket)
                            <td>{{ $rowket->skill }}</td>
                            <td>{{ $rowket->level }}</td>
                    @endforeach
                            <td><a href="{{ $row->document_url }}">Download</a></td>
                            <td>
                            </td>
                        </tr>
                    
                </tbody>
            </table>

            <table class="table" style="margin-left: 10px; margin-right: 10px;">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Employee</th>
                        <th scope="col">Mulai</th>
                        <th scope="col">Terakhir</th>
                        <th scope="col">Tambah</th>
                        <th scope="col">Deskripsi</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($dataPekerjaan as $rowpek)
                            <th scope="row">{{ $no++ }}</th>
                            @foreach ($dataPekerjaan as $rowpek)
                            <td>{{ $rowpek->pekerjaan }}</td>
                            <td>{{ $rowpek->city }}</td>
                            <td>{{ $rowpek->employer }}</td>
                            <td>{{ $rowpek->mulai }}</td>
                            <td>{{ $rowpek->terakhir }}</td>
                            <td>{{ $rowpek->tambah }}</td>
                            <td>{{ $rowpek->deskripsis }}</td>
                    @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
                    @foreach ($dataPendidikan as $rowpen)
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $rowpen->pendidikanFormal }}</td>
                            <td>{{ $rowpen->jurusan }}</td>
                            <td>{{ $rowpen->tahunPendidikan }}</td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            <a href="/tampil/{{ $row->id }}" class="btn btn-info float:right">Edit</a>
            <a href="/delete/{{ $row->id }}" class="btn btn-danger float:right width:50px">Delete</a>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>
