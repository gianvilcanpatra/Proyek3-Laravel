<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to Your Website</title>
    <!-- Bootstrap CSS or your preferred CSS framework -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="100">
            </div>
            <div class="col-md-10">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/tampilanawal">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tambahdata">CREATE CV</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CV TEMPLATE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pengguna">DATA USERS</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Your content goes here -->
</body>
</html>
