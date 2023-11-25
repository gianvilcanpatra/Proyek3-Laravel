<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="{{ asset('css/tampilanawal.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>



<body class="bg-transparent">

  <div class="sidebar">
    <div class="welcome-container">
      <a class="navbar-brand" href="/tampilanawal" style="float: right;"></a>
      <h1 class="welcome-heading">HELLO, {{ session('name') }}!
      </h1>
  </div>
  
    <a class="navbar-brand" href="/tampilanawal" style="float: right;"></a>
    <ul class="navbar-nav">
      <li class="nav-item mx-3">
        <a class="dropdown-item" aria-current="page" href="#">HOME</a>
      </li>
      <li class="nav-item mx-3">
        <a class="dropdown-item" aria-current="page" href="{{ route('templatecv') }}">CV TEMPLATES</a>
      </li>
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item mx-3">
        <a class="dropdown-item" aria-current="page" href="/profil">CREATE CV</a>
      </li>
      <li class="nav-item mx-3">
        <a aria-current="page" href="{{ route('login') }}" style="color: black; text-decoration: none; display: flex; align-items: center;">
            <div style="margin-top: 250px; display: flex; align-items: center;">
                <img src="{{ asset('image/logout.png') }}" alt="Logout" width="20" height="20" style="margin-right: 5px;">
                <span class="dropdown-item" style="font-weight: bold; color: black; font-size: 18px; transition: color 0.20s;">
                    Logout
                </span>
            </div>
        </a>
    </li>
    
    
    </ul>
  

  </div>

  <nav class="navbar navbar-expand-md navbar-light bg-light border-left">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse collapsed" id="navbarSupportedContent">
            <!-- Navbar content goes here -->
        </div>
    </div>
</nav>


    <div class="container mt-5">
        <h1><img src="image/gambar1.png" width="300" height="200"
                style="position: absolute; bottom: 0; right: 0 ; top:0;transform: translatey(50%); margin-right: 100px; ">
            WELCOME TO MY CV CREATOR</h1>
        <h2 style="position: relative;">
            MY CV
            <img src="image/gambar2.png" width="600" height="400"
                style="position: absolute; top: -100%; right: 0;  transform: translatey(-20%); margin-right:200px;">
        </h2>
        <h2>CREATOR</h2>
        <img src="image/gambar3.png" width="600" height="400"
            style="position: absolute; top: 30%; right: 0;  transform: translatey(20%); margin-right:10px;">
        <h3> <span id="typed-text"></span></h3>
        <img src="image/gambar1.png" width="300" height="200"
            style="position: absolute; bottom: 0; right: 0 ; top:0;transform: translatey(200%); margin-right: 500px; ">
    </div> 

    <script>
        const typedTextElement = document.getElementById("typed-text");
        const text = "This website helps you make CV writing easier";
        let index = 0;

        function typeWriter() {
            if (index < text.length) {
                typedTextElement.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeWriter, 100);
            } else {

                index = 0;
                typedTextElement.innerHTML = "";
                setTimeout(typeWriter, 100);
            }
        }
        window.onload = function () {
            typeWriter();
        };
       $(document).ready(function () {
    // Toggle the collapse of the sidebar when the SVG is clicked
    $("#svgNavbar").click(function () {
        console.log("SVG clicked!");
        $(".navbar").toggleClass("d-none");
    });
});

    </script>
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
       crossorigin="anonymous"></script>
   
</body>

</html>
