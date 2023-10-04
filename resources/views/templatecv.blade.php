<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-transparent">
    <nav class="navbar navbar-expand-md navbar-light bg-light ">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('home') }}">
             <img src ="image/Logo2.png"  width="100" height="100"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card border-primary mb-4" style="max-width: 20rem;">
              <img class="card-img-top" src="image/gambarCV1.jpg" alt="Card image cap">
              <div class="card-body text-primary">
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Create CV</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-primary mb-4" style="max-width: 20rem;">
              <img class="card-img-top" src="image/gambarCV2.jpg" alt="Card image cap">
              <div class="card-body text-primary">
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Create CV</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-primary mb-4" style="max-width: 20rem;">
              <img class="card-img-top" src="image/gambarCV3.jpg" alt="Card image cap">
              <div class="card-body text-primary">
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Create CV</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
  
      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
