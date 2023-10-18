<!DOCTYPE html> <html lang="en"> <head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('css/tambahdata.css') }}">

<title>Add Data</title>
</head>

<body>
  <h1 class="center">KETERAMPILAN</h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <div class="container mb-4">
              <div class="row-1">
                @csrf
                <div class="mb-3">
                  <label for="skill" class="form-label">Keahlian</label>
                  <input type="text" name="skill" class="form-control" id="skill" aria-describedby="emailHelp" value = "{{ $data -> skill }}">
                </div>
                <div class="mb-3">
                  <label for="level" class="form-label">Level Keahlian</label>
                  <select class="form-select" name="level" id="level" aria-label="Default select example">
                    <option selected>{{ $data -> level }}</option>
                    <option value="novice">Novice</option>
                    <option value="intermediate">Intermediate</option>
                  </select>
                </div>
              </div>
              {{-- <button onclick="prevSlide(1)">Kembali</button>
              <button onclick="nextSlide(2)">Selanjutnya</button> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>