{{-- Set data pengguna ke dalam session --}}
@php
session(['userData' => $data]);
@endphp

<!doctype html>
<html lang="en"> <head> <!-- Required meta tags -->
<meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
              <img src ="image/home.png"  width="70" height="70"> </a>
          </div>
    </nav>
    <h1 class="text-center mb-4">Isi Data Profil </h1>

    <div class="container">
        {{-- <a href="/tambahdata" class="btn btn-success">MAKE CV</a> --}}
        <div class="row">
          <div class="top-table mb-3">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">No Handphone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Country</th>
                    {{-- <th scope="col">Date</th>         --}}
                    <th scope="col">Description</th>        
                                 
                  </tr>
                </thead>
                <tbody>
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->firstName}} </td>
                        <td>{{ $row->lastName}}</td>
                        <td>{{ $row->gender}}</td>
                        <td>{{ $row->address}}</td>
                        <td>0{{ $row->nomorTelepon}}</td>
                        <td>{{ $row->emailUser}}</td>
                        <td>{{ $row->tanggalLahir}}</td>
                        <td>{{ $row->country}}</td>
                        
                        {{-- <td>{{ $row->tanggalLahir}}</td> --}}
                        <td>{{ $row->deskripsi}}</td>
                        
                        <td>
                          <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                          <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                        </td>  
                  </tr>    
              

                </tbody>
<<<<<<< HEAD
            <table class="table">
              @if ($row->pendidikanFormal)
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th>Pendidikan Formal:</th>
                  <th>Jurusan:</td>
                  <th>Tahun Pendidikan:</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">{{ $no++ }}</th>
                  <td>{{ $row->pendidikanFormal }}</td>
                  <td>{{ $row->jurusan }}</td>
                  <td>{{ $row->tahunPendidikan }}</td>
                </tr>
              </tbody>
              @endif
          </table>                    
            <table class="table">
              @if ($row->pendidikanFormal)
              <thead>
                  <tr>
                      <th scope="col">No</th>
                      <th>Job Title</th>
                      <th>City</th>
                      <th>Employer</th>
                      <th>Start Date</th>
                      <th>Year</th>
                      <th>End Date</th>
                      <th>Years</th>
                      <th>Deskripsi</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">{{ $no++ }}</th>
                      <td>{{ $row->pekerjaan }}</td>
                      <td>{{ $row->City }}</td>
                      <td>{{ $row->Employer }}</td>
                      <td>{{ $row->Start }}</td>
                      <td>{{ $row->Year }}</td>
                      <td>{{ $row->End }}</td>
                      <td>{{ $row->Years }}</td>
                      <td>{{ $row->deskripsis }}</td>
                  </tr>
              </tbody>
              @endif
          </table>
          
                
          
=======
            </table>
            <div class="tabel-pendidikan">
              <div>
                @if ($row->pendidikanFormal)
                    <strong>Pendidikan Formal:</strong> {{ $row->pendidikanFormal}}
                @endif
              </div>
              <div>
                @if ($row->jurusan)
                    <strong>Jurusan:</strong> {{ $row->jurusan}}
                @endif
              </div>
              <div>
                @if ($row->tahunPendidikan)
                    <strong>Tahun Pendidikan:</strong> {{ $row->tahunPendidikan}}
                @endif
              </div>
            </div>

            <div class="tabel-pekerjaan mt-3">
              <div>
                @if ($row->pendidikanFormal)
                <strong>Pekerjaan:</strong> {{ $row->pekerjaan}}
                @endif
              </div>
            </div>
          </div>

          <div class="tabel-keterampilan">
              <div>
                @if ($row->skill)
                    <strong>Skill:</strong> {{ $row->skill}}
                @endif
              </div>
              <div>
                @if ($row->level)
                    <strong>Level:</strong> {{ $row->level}}
                @endif
              </div>
          </div>

          <div class="tabel-document">
              <div>
                    <a href="{{ $row->document_url }}">Download</a>
              </div>
          </div>

>>>>>>> 9c38d0aea9575e16b97f75d5d2a8ca88345cb3e3
            @endforeach
              {{-- <a href="/tambahdata" class="btn btn-success square-button">MAKE CV</a>
              <h1 class="text-center mb-4"></h1>
              <a href="/template" class="btn btn-success square-button">TEMPLATE CV</a> --}}
              <div class="buttonPreview">
                <div class="textPreview">
                  <a href="{{ route('preview') }}" class="btn btn-primary">Preview</a>  
                </div>
              </div>

  
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