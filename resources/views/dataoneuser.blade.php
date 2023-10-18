<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <style>
        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 40rem;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .card-header {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1.5rem;
        }

        .card-link {
            display: block;
            text-align: center;
        }
    </style>

    <script>
        function confirmDelete() {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                alert("Data berhasil dihapus.");
            }
        }
    </script>

    <title>Hello, world!</title>
</head>
<body>
    <div class="card-container">
        @if($data->isNotEmpty())
            @php
                $latestData = $data->last();
            @endphp
            <div class="card">
                <div class="card-header">{{ $latestData->firstName }} {{ $latestData->lastName }}</div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="card-text">
                            <div class="card-header">Gender</div>
                            {{ $latestData->gender }}
                        </p>
                        <p class="card-text">
                            <div class="card-header">Address</div>
                            {{ $latestData->address }}
                        </p>
                        <p class="card-text">
                            <div class="card-header">No Handphone</div>
                            0{{ $latestData->nomorTelepon }}
                        </p>
                        <p class="card-text">
                            <div class="card-header">Email</div>
                            {{ $latestData->emailUser }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="card-text">
                            <div class="card-header">Birthdate</div>
                            {{ $latestData->tanggalLahir }}
                        </p>
                        <p class="card-text">
                            <div class="card-header">Country</div>
                            {{ $latestData->country }}
                        </p>
                        <p class="card-text">
                            <div class="card-header">Description</div>
                            {{ $latestData->deskripsi }}
                        </p>
                        <p class="card-text">
                            <div class="card-header">Pendidikan Formal</div>
                            {{ $latestData->pendidikanFormal }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p class="card-text">
                            <div class="card-header">Jurusan</div>
                            {{ $latestData->jurusan }}
                        </p>
                        <p class="card-text">
                            <div class="card-header">Tahun Pendidikan</div>
                            {{ $latestData->tahunPendidikan }}
                        </p>
                        <p class="card-text">
                            <div class="card-header">Pekerjaan</div>
                            {{ $latestData->pekerjaan }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p class="card-text">
                            <div class="card-header">Skill</div>
                            {{ $latestData->skill }}
                        </p>
                        <p class="card-text">
                            <div class="card-header">Level</div>
                            {{ $latestData->level }}
                        </p>
                        <a href="{{ $latestData->document_url }}" class="card-link">Download Document</a>
                        <button class="btn btn-info" onclick="location.href='/tampil/{{ $latestData->id }}'">Edit</button>
                        <button class="btn btn-danger" onclick="confirmDelete()">Hapus</button>
                    </div>
                </div>
            </div>
        @else
            <p>Tidak ada data yang tersedia.</p>
        @endif
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
