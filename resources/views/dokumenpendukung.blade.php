<!DOCTYPE html> <html lang="en"> <head> <!-- Required meta tags --> <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('css/tambahdata.css') }}">

<title>Add Data</title>
</head>

<body>
    <h1 class="center">Dokumen Pendukung</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
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
                                <button onclick="nextSlide(2)">Submit</button>
                            </div>
                        </div>
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
</body>

</html>