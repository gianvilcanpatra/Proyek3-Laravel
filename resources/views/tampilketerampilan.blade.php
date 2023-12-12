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
  <div class="col-8; align-items: center;">
    <div class="card">
      <div class="card-body">
                <form action="{{ route('updatedata.keterampilan', ['id' => $keterampilan[0]->id ]) }}" method="POST" enctype="multipart/form-data">
              
              @csrf
              @method('PUT')

              <div style="display: flex; align-items: center;">
                <img src="image/skill-level-intermediate_.png" alt="Profil Image" style="margin-right: 15px; width: 30px;">
                <h2 class="header-profil">KETERAMPILAN</h2>
              </div>
              <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
    
    
              <div class="mb-5">
                <label for="Keterampilan" class="form-label"></label>
                <table class="table table-bordered" style="border-color: #f50202">
                  <thead style="background-color:rgb(252, 252, 228);">
                      <tr class="table-bordered" style="border-color: #000000">
                            <th>Keahlian</th>
                            <th>Tahun Pengalaman</th>
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
                            <input type="text" class="form-control" name="Keterampilan[{{ $item->id }}][tahunPengalaman]" placeholder="mis. 2 tahun" value="{{ $item->tahunPengalaman }}">
                        </td>
                          <td>
                            <select class="form-select" name="Keterampilan[{{ $item->id }}][level]">
                              <option value="Novice" {{ $item->level == 'Novice' ? 'selected' : '' }}>Novice (Pemula)</option>
                              <option value="Competent" {{ $item->level == 'Competent' ? 'selected' : '' }}>Competent (Mampu)</option>
                              <option value="Proficient" {{ $item->level == 'Proficient' ? 'selected' : '' }}>Proficient (Cakap)</option>
                              <option value="Expert" {{ $item->level == 'Expert' ? 'selected' : '' }}>Expert (Ahli)</option>
                              <option value="Master" {{ $item->level == 'Master' ? 'selected' : '' }}>Master</option>
                          </select>
                          
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
                <button class="btn btn-info" style="float:right" type="submit">update</button>
                
              </form>
            </div>
         </div>
          </div>

</body>
@endsection
</html>