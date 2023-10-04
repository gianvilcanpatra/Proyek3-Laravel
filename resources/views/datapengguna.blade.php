{{-- Set data pengguna ke dalam session --}}
@php
    session(['userData' => $data]); 
@endphp

<!doctype html>
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
              <img src ="image/home.png"  width="70" height="70"> </a>
          </div>
    </nav>
    <h1 class="text-center mb-4">Isi Data Profil </h1>

    <div class="container">
        {{-- <a href="/tambahdata" class="btn btn-success">MAKE CV</a> --}}
        <div class="row">
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
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
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
                          <a href="#" class="btn btn-danger">Delete</a>
                        </td>  
                  </tr>    
                
                  @endforeach
                </tbody>
              </table>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>