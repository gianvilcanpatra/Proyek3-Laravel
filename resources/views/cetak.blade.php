<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .table-container {
            font-family: Arial, Helvetica, sans-serif;
            border: 1px solid #ddd;
            width: 100%;
            margin-top: 20px;
        }

        .info {
            display: flex;
            justify-content: space-between;
            padding: 8px;
            background-color: #f2f2f2;
        }

        .info:hover {
            background-color: #ddd;
        }

        .info-label {
            font-weight: bold;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            padding: 12px;
            color: #0056b3;
            color: white;
        }
        .prev-next-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .prev-button,
        .next-button {
            color: #000000;
            border: none;
            /* padding: 10px 20px; */
            cursor: pointer;
            font-size: 18px;
            margin-right: 10px;
            background: transparent;
            cursor: pointer;
            text-decoration: underline;
        }

        .prev-button:hover,
        .next-button:hover {
            text-decoration: none;
            /* Menghapus garis bawah pada hover (opsional) */
            color: #0056b3;
            /* Warna teks pada hover */
            background: transparent;
        }


    </style>
</head>
<body>


<div class="header">
    <div class="header-background"></div>
    <div class="header-text">Pribadi</div>
</div>
    @php
        $no = 1;
    @endphp
    @foreach ($data as $dataPengguna)
    <div class="d-container">
            <div class="info-label">Nama</div>
            <div class="info-value">{{ $dataPengguna->firstName }} {{
                $dataPengguna->lastName }}</div>
        </div>
        <div class="d-container">
            <div class="info-label">Nomor Handphone</div>
            <div class="info-value">0{{ $dataPengguna->nomorTelepon }}</div>
        </div>
        <div class="d-container">
            <div class="info-label">Email</div>
            <div class="info-value">{{ $dataPengguna->emailUser }}</div>
        </div>
        <div class="d-container">
            <div class="info-label">Tanggal Lahir</div>
            <div class="info-value">{{ $dataPengguna->tanggalLahir }}</div>
        </div>
        <div class="d-container">
            <div class="info-label">Jenis Kelamin</div>
            <div class="info-value">{{ $dataPengguna->gender }}</div>
        </div>
        <div class="d-container">
            <div class="info-label">Negara</div>
            <div class="info-value">{{ $dataPengguna->country }}</div>
        </div>
    @endforeach
</div>

<div class="header">
    <div class="header-background"></div>
    <div class="header-text">Profil</div>
</div>
    @php
        $no = 1;
    @endphp
    @foreach ($data as $dataPengguna)
    <div class="d-container">
        <div class="description-container">
            <div class="description-text">
                {{ $dataPengguna->deskripsi }}
            </div>
        </div>
    @endforeach
</div>

<div class="header">
    <div class="header-background"></div>
    <div class="header-text">RIWAYAT PENDIDIKAN</div>
</div>
@foreach ($data as $dataPengguna)
    @php
        $index = $loop->index;
        $pendidikanData = isset($pendidikan[$index]) ? $pendidikan[$index] : null;
    @endphp
    <div class="info">
        <div class="content">
            <div class="info">
                <div class="info-label">{{ $pendidikanData ? $pendidikanData->jurusan : 'N/A' }}</div>
                <div class="info-value-pendidikan">{{ $pendidikanData ? $pendidikanData->tahunPendidikan : 'N/A' }}</div>
            </div>
            <div class="info">
                <div class="info-label">{{ $pendidikanData ? $pendidikanData->pendidikanFormal : 'N/A' }}</div>
            </div>
        </div>
    </div>
@endforeach
<!-- Assuming you have the following line somewhere in your code -->
@php
    $totalKeterampilan = count($keterampilan ?? []);
@endphp

@while ($index < $totalKeterampilan)
    <div class="keterampilan-container">
        <div class="content">
            <div class="keterampilan-box">
                <div class="info" style="margin-top: {{ $marginValue }}px;">
                    <div class="info-label">{{ $keterampilan[$index]->skill }}</div>
                    <div class="info-value-pendidikan">{{ $keterampilan[$index]->level }}</div>
                </div>
            </div>
        </div>
    </div>

    @php
        $index++;
        $marginValue += 75;
    @endphp
@endwhile




   

</body>
</html>
