<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/tambahdata.css') }}">

    <title>Add Data</title>
</head>


<body class="d-flex">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/tampilanawal">
                <img src="image/home.png" width="50" height="50">
            </a>
        </div>


        <nav id="sidebar" style="text-align: left;">
            <ul class="prev-next-list">
                <li><a href="/profil" class="next-button">Profil</a></li>
                <li><a href="javascript:void(0);" class="next-button"
                        onclick="validateProfileAndNavigate('/riwayatpendidikan')">Riwayat Pendidikan</a></li>
                <li><a href="javascript:void(0);" class="next-button"
                        onclick="validateProfileAndNavigate('/riwayatpekerjaan')">Riwayat Pekerjaan</a></li>
                <li><a href="javascript:void(0);" class="next-button"
                        onclick="validateProfileAndNavigate('/keterampilan')">Keterampilan</a></li>
                <li><a href="javascript:void(0);" class="next-button"
                        onclick="validateProfileAndNavigate('/dokumenpendukung')">Dokumen Pendukung</a></li>
                <li><a href="/preview" class="next-button">Tampil CV</a></li>
            </ul>
        </nav>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdata" method="POST" enctype="multipart/form-data"
                            onsubmit="return validateForm()" id="profileForm">
                            @csrf
                            <h2 class="header-profil">PROFIL</h2>
                            <hr style="margin-top: 0px; margin-bottom: 30px; color:#000000;">
                            <div class="container mb-4">
                                <div class="row-1">
                                    <div class="profile-section">
                                        <div class="profile-image">
                                            @if($data->first() &&$data->first()->image)
                                            <img src="{{ asset('fotoprofil/' . $data->first()->image) }}"
                                                alt="Profile Image">
                                            @else
                                            <img src="{{ asset('image/profil.png') }}"
                                                alt="Profile Image">
                                            <!-- Provide a default image or leave it empty based on your requirement -->
                                            @endif
                                            <!-- <label for="nomorTelepon" class="form-label">Foto*</label>
                                            <input type="file" name="image" class="form-control"
                                                id="exampleInputEmail1"> -->
                                        </div>

                                        
                                        <input type="file" name="image" class="form-control"
                                                id="exampleInputEmail1">
                                                <label for="nomorTelepon" class="form-label">Foto*</label>
                                        
                                    </div>


                                    <div class="fn-ln">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">First Name*</label>
                                            <input type="text" name="firstName" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                value="{{ old('firstName', $data->first()->firstName ?? '') }}"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Last Name*</label>
                                            <input type="text" name="lastName" class="form-control"
                                                id="exampleInputPassword1"
                                                value="{{ old('lastName', $data->first()->lastName ?? '') }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="nomorTelepon" class="form-label">Nomor Handphone*</label>
                                            <input type="number" name="nomorTelepon" class="form-control"
                                                id="nomorTelepon"
                                                value="{{ old('nomorTelepon', $data->first()->nomorTelepon ?? '') }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="emailUser" class="form-label">Email*</label>
                                            <input type="email" name="emailUser" class="form-control" id="emailUser"
                                                value="{{ old('emailUser', $data->first()->emailUser ?? '') }}"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="justify-content-center">

                                    <div class="row mb-3">
                                        <div class="col-4 custom-col">
                                            <label for="tanggalLahir" class="form-label">Birthdate*</label>
                                            <input type="date" name="tanggalLahir" class="form-control"
                                                id="tanggalLahir"
                                                value="{{ old('tanggalLahir', $data->first()->tanggalLahir ?? '') }}"
                                                required max="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                        <div class="col-4 custom-col">
                                            <label for="exampleInputPassword1" class="form-label">Gender*</label>
                                            <select class="form-select" name="gender"
                                                aria-label="Default select example" required>
                                                <option value="{{ old('gender', $data->first()->gender ?? '') }}"
                                                    disabled selected>{{ old('gender', $data->first()->gender ?? '') }}
                                                </option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-4 custom-col">
                                            <label for="country" class="form-label">Nationality*</label>
                                            <select class="form-select" name="country"
                                                aria-label="Default select example" required>
                                                <option value="{{ old('country', $data->first()->country ?? '') }}">{{
                                                    old('country', $data->first()->country ?? '') }}</option>

                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Central African Republic">Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Ivory Coast">Ivory Coast</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, North">Korea, North</option>
                                                <option value="Korea, South">Korea, South</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia">Micronesia</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                                    Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Sudan">South Sudan</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States of America">United States of America
                                                </option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City">Vatican City</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Address*</label>
                                    <input type="text" name="address" class="form-control" id="exampleInputPassword1"
                                        value="{{ old('address', $data->first()->address ?? '') }}" required>
                                </div>


                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Description</label>
                                    <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                                        value="{{ old('deskripsi', $data->first()->deskripsi ?? '') }}">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-info" type="submit">Submit</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

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
            text-decoration: none;
            /* Menghapus garis bawah pada hover (opsional) */
            color: #0056b3;
            /* Warna teks pada hover */
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
                //   alert("Tanggal lahir tidak valid.");
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

        function validateProfileAndNavigate(targetUrl) {
            // Add additional validation logic here
            var firstName = document.getElementsByName("firstName")[0].value;
            var lastName = document.getElementsByName("lastName")[0].value;
            var nomorTelepon = document.getElementsByName("nomorTelepon")[0].value;
            var emailUser = document.getElementsByName("emailUser")[0].value;
            var tanggalLahir = document.getElementById("tanggalLahir").value;
            var gender = document.getElementsByName("gender")[0].value;
            var country = document.getElementsByName("country")[0].value;
            var address = document.getElementsByName("address")[0].value;

            // Check if any of the required fields are empty
            if (firstName === '' || lastName === '' || nomorTelepon === '' || emailUser === '' || tanggalLahir === '' || gender === '' || country === '' || address === '') {
                alert("Dimohon untuk mengisi Data Profil terlebih dahulu.");
            } else {
                // If all required fields are filled, navigate to the target URL
                window.location.href = targetUrl;
            }
        }


    </script>
</body>

</html>