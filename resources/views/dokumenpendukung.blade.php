@extends('layout.content1')
<!DOCTYPE html>
<html lang="en">

<head> <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Data</title>
</head>

<body>
    @section('card')
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/insertdatadokumen" method="POST" enctype="multipart/form-data"
                        onsubmit="return validateForm()">
                        <div style="display: flex; align-items: center;">
                            <img src="image/document-add_.png" alt="Profil Image"
                                style="margin-right: 15px; width: 30px;">
                            <h2 class="header-profil">DOKUMEN PENDUKUNG</h2>
                        </div>

                        <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">
                        @csrf
                        <div class="container mb-4">
                            <div class="row-1">
                                <div class="mb-3">
                                    <label for="document" class="form-label">Dokumen</label>
                                    <div class="custom-file">
                                        <input type="file" name="document" accept=".pdf, .doc, .docx" id="document"
                                            class="custom-file-input">
                                    </div>
                                </div>
                                {{-- <button onclick="prevSlide(1)">Kembali</button> --}}
                                <button class="btn btn-success" style="float: right;" type="submit">
                                    Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            const fileInput = document.querySelector('#document');
            const clearButton = document.querySelector('#clearFile');
            const fileLabel = document.querySelector('label[for="document"]');

            fileInput.addEventListener('change', function () {
                if (this.files.length > 0) {
                    fileLabel.textContent = this.files[0].name; // Mengatur teks label ke nama file yang dipilih
                } else {
                    fileLabel.textContent = 'Pilih file...'; // Mengatur kembali ke "Pilih file..." jika tidak ada file yang dipilih
                }
            });

            clearButton.addEventListener('click', function () {
                fileInput.value = ''; // Membersihkan nilai input file
                fileLabel.textContent = 'Pilih file...'; // Mengatur label kembali ke "Pilih file..."
            });
        });

    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script>
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
                alert("Please fill in all required fields in the profile section before proceeding.");
            } else {
                // If all required fields are filled, navigate to the target URL
                window.location.href = targetUrl;
            }
        }
    </script>
    @endsection
</body>

</html>