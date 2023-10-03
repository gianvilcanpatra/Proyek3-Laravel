<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        
        .navbar-nav .nav-item .nav-link:hover {
          border-bottom: 2px solid black; 
        }
        .container h1 {
          margin-top: 100px;
          font-size: 30px;
          font-family: "Georgia", serif; 
          position: relative;

       }
        .container h2 {
          font-size: 100px;
          font-family: "Georgia", serif; 
          margin-bottom: 20px ;
          

      }
        .container h3 {
          font-size: 20px;
          font-family: "Georgia", serif; 
          margin-bottom: 10px;
          
      }
        
     </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">
             <img src ="image/Logo2.png"  width="70" height="70"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item mx-3">
                <a class="nav-link active  " aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="#">CV TEMPLATES</a>
              </li>
              <li class="nav-item dropdown mx-3">
                <a class="nav-link active" aria-current="page" href="{{ route('tambahdata') }}">CREATE CV</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link active" aria-current="page" href="{{ route('pengguna') }}">Modifikasi CV</a>
              </li>
            </ul>

            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container mt-5" > 
        <img src="image/gambar1.png" width="300" height="200" style="float: right; ">
        <h1>WELCOME  TO MY CREATOR</h1>
        <h2>MY CV</h2>
        <h2>CREATOR</h2>
        <h3>This website helps you make CV writing easier</h3>
        
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>