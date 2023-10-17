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

<h1 class="center">PROFILE</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="header-profil">PERSONAL DETAIL</h2>
                    <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
                  <div class="container mb-4">
                  <div class="row-1">
                    <div class="profile-section">
                        <div class="profile-image">
                            <img src="path/to/profile-image.jpg">
                            <label for="nomorTelepon" class="form-label">foto*</label>
                            <input type="file" name="foto" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="profile-details">
                        </div>
                    </div>
                        
                        <div class="fn-ln">   
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">First Name*</label>
                              <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Last Name*</label>
                              <input type="text" name="lastName" class="form-control" id="exampleInputPassword1">
                          </div>
                        </div>
                      </div> 
                        
                        
                        <div class="row justify-content-center">
                          <div class="col-md-6">
                              <div class="mb-3">
                                  <label for="nomorTelepon" class="form-label">Nomor Handphone*</label>
                                  <input type="number" name="nomorTelepon" class="form-control" id="nomorTelepon" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="mb-3">
                                  <label for="emailUser" class="form-label">Email*</label>
                                  <input type="email" name="emailUser" class="form-control" id="emailUser" required>
                              </div>
                          </div>
                        </div>                      
                      
                        <div class="justify-content-center">
                         
                              <div class="row mb-3">
                                  <div class="col-4 custom-col">
                                      <label for="tanggalLahir" class="form-label">Birthdate*</label>
                                      <input type="date" name="tanggalLahir" class="form-control" id="tanggalLahir" required>
                                  </div>
                                  <div class="col-4 custom-col">
                                      <label for="exampleInputPassword1" class="form-label">Gender*</label>
                                      <select class="form-select" name="gender" aria-label="Default select example" required>
                                          <option value="" disabled selected>Select Gender</option>
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                      </select>
                                  </div>
                                  <div class="col-4 custom-col">
                                      <label for="country" class="form-label">Nationality*</label>
                                      <select class="form-select" name="country" aria-label="Default select example" required>
                                          <option value=""></option>
                                    
                                          <option value="Afghanistan">Afghanistan</option>
                                          <option value="Zimbabwe">Zimbabwe</option>
                                          </select>
                                  </div>
                              </div>
                          </div>
                           
                      
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Address*</label>
                            <input type="text" name="address" class="form-control" id="exampleInputPassword1" required>
                        </div>
                      
                        
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Description</label>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi">
                        </div>
                        <div class="d-flex justify-content-between">
                          <a href="/tampilanawal" class="btn btn-danger">Previous</a>
                          
                      </div>
                    </div>
                  </div>
                </div>
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
<style>
    .prev-next-buttons {
        text-align: center;
        margin-top: 20px;
    }

    .prev-button,
    .next-button {
        color: #000000;
        border: none;
        /* padding: 10px 20px; */
        cursor: pointer;
        font-size: 18px;
        margin-right: 10px;
        background: transparent;
        cursor: pointer;
        text-decoration: underline;
    }

    .prev-button:hover,
    .next-button:hover {
        text-decoration: none; /* Menghapus garis bawah pada hover (opsional) */
        color: #0056b3; /* Warna teks pada hover */
        background: transparent; 
    }

    .slide-form {
        display: none;
    }
</style>


<script>

    function validateForm() {
        var tanggalLahir = document.getElementById("tanggalLahir").value;
        
        // Buat objek Date dari input tanggal lahir
        var dob = new Date(tanggalLahir);
        var today = new Date();
    
        // Hitung usia
        var age = today.getFullYear() - dob.getFullYear();
    
        // Periksa apakah tanggal lahir valid
        if (isNaN(age) || age < 0) {
          alert("Tanggal lahir tidak valid.");
          return false;
        }
    
        return true;
    }

    var currentSlide = 1;

function showSlide(n) {
    var slides = document.getElementsByClassName("slide-form");
    if (n < 1) {
        currentSlide = 1;
    }
    if (n > slides.length) {
        currentSlide = slides.length;
    }
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[currentSlide - 1].style.display = "block";
}

function goToSlide(n) {
    currentSlide = n;
    showSlide(n);
}

showSlide(1);


</script>
</body>
</html>