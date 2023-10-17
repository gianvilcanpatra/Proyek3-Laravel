<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/tambahdata.css') }}"> 

    <title>Add Data</title>
</head>
<body>
    <h1 class="center">RIWAYAT PENDIDIKAN</h1>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                  <div class="container mb-4">
                  <div class="row-1">
                    <div id="formRiwayatContainer">
                    
                        <div class="mb-3">   
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Pendidikan Formal*</label>
                              <input type="text" name="pendidikanFormal" class="form-control" id="exampleInputEmail1" value = "{{ $data -> pendidikanFormal }}">
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Jurusan*</label>
                              <input type="text" name="jurusan" class="form-control" id="exampleInputPassword1" value = "{{ $data -> jurusan }}">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tahun*</label>
                            <input type="text" name="tahunPendidikan" class="form-control" id="exampleInputPassword1" value = "{{ $data -> tahunPendidikan }}">
                        </div>
                        </div>
                      </div>
                      {{-- <button onclick="prevSlide(1)">Kembali</button>
                      <button id="tambahRiwayat">Tambah Riwayat</button>    
                      <button onclick="nextSlide(2)">Selanjutnya</button> --}}
                </div>
              </div>
             </div>
          </div>
        </div>
      </div>            
    </div>
    </div>

    <script>
      const pendidikanFormalInput = document.querySelector('input[name="pendidikanFormal"]');
      const jurusanInput = document.querySelector('input[name="jurusan"]');
      const tahunPendidikanInput = document.querySelector('input[name="tahunPendidikan"]');
      
      pendidikanFormalInput.addEventListener('input', function() {
          if (pendidikanFormalInput.value) {
              jurusanInput.removeAttribute('disabled');
              tahunPendidikanInput.removeAttribute('disabled');
          } else {
              jurusanInput.setAttribute('disabled', 'disabled');
              tahunPendidikanInput.setAttribute('disabled', 'disabled');
          }
      });
  </script>  
</body>
</html>   