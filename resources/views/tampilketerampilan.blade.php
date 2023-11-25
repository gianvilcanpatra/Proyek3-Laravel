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
                <form action="{{ route('updatedata.keterampilan', ['id' => $keterampilan[0]->id ]) }}" method="POST" enctype="multipart/form-data">
              <h2 class="header-profil">KETERAMPILAN</h2>
              <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
              @csrf
              @method('PUT')

                <table class="table">
                    <thead>
                        <tr>
                            <th>Keahlian</th>
                            <th>Level</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($keterampilan as $item)
                      <tr>
                          <td>
                              <input type="text" class="form-control" name="Keterampilan[{{ $item->id }}][skill]" placeholder="Keahlian" value="{{ $item->skill }}">
                          </td>
                          <td>
                            <select class="form-select" name="Keterampilan[{{ $item->id }}][level]">
                              <option value="Novice" {{ $item->level == 'Novice' ? 'selected' : '' }}>Novice</option>
                              <option value="Intermediate" {{ $item->level == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                          </select>
                          
                          </td>
                      </tr>
                  </tbody>
                </table>
                <button class="btn btn-info" style="float:right" type="submit">update</button>
                @endforeach
              </form>
            </div>
         </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</body>
</html>