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
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="image/home.png" width="50" height="50">
      </a>
    </div>
  </nav>
  <div class="prev-next-buttons">
    <a href="/profil" class="next-button">Profil</a>
    <a href="/riwayatpendidikan" class="next-button">Riwayat Pendidikan</a>
    <a href="/riwayatpekerjaan" class="next-button">Riwayat Pekerjaan</a>
    <a href="/keterampilan" class="next-button">Keterampilan</a>
    <a href="/dokumenpendukung" class="next-button">Dokumen Pendukung</a>
    <a href="/pengguna" class="next-button">Tampil CV</a>
  </div>
  
<h1 class="center">RIWAYAT PEKERJAAN</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                  <form action="/insertdatapekerjaan" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                  <div class="container mb-4">
                  <div class="row-1">
                        <div class="mb-3">   
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Job Title*</label>
                              <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" aria-describedby="emailHelp" value="{{ old('pekerjaan', $data->first()->pekerjaan ?? '') }}">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">City*</label>
                            <input type="text" name="city" class="form-control" id="city" aria-describedby="emailHelp" value="{{ old('city', $data->first()->city ?? '') }}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Employer*</label>
                          <input type="text" name="employer" class="form-control" id="employer" aria-describedby="emailHelp" value="{{ old('employer', $data->first()->employer ?? '') }}">
                      </div>

                      <div class="justify-content-center">
                      <div class="row mb-3">
                                                                         
                            <div class="col-3">  
                             <label for="mulai" class="form-label">Start Date*</label>
                             <select class="form-select" name="mulai" id="mulai" aria-label="Default select example">
                                <option value="{{ old('mulai', $data->first()->mulai ?? '') }}" disabled selected>{{ old('mulai', $data->first()->mulai ?? '') }}</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                             </select>
                            </div>
                            <div class="col-3">       
                            <label for="tahun" class="form-label">Year*</label>
                             <select class="form-select" name="tahun" id="tahun" aria-label="Default select example">
                                <option value="{{ old('tahun', $data->first()->tahun ?? '') }}" disabled selected>{{ old('tahun', $data->first()->tahun ?? '') }}</option>
                                <option value="1960">1961</option>
                                <option value="1962">1962</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                              </select>
                            </div>
                            <div class="col-3">  
                              <label for="terakhir" class="form-label">End Date*</label>
                              <select class="form-select" name="terakhir" id="terakhir" aria-label="Default select example">
                                 <option value="{{ old('terakhir', $data->first()->terakhir ?? '') }}" disabled selected>{{ old('terakhir', $data->first()->terakhir ?? '') }}</option>
                                 <option value="January">January</option>
                                 <option value="February">February</option>
                                 <option value="March">March</option>
                                 <option value="April">April</option>
                                 <option value="May">May</option>
                                 <option value="June">June</option>
                                 <option value="July">July</option>
                                 <option value="August">August</option>
                                 <option value="September">September</option>
                                 <option value="October">October</option>
                                 <option value="November">November</option>
                                 <option value="December">December</option>
                              </select>
                             </div>
                             <div class="col-3">      
                              <label for="tambah" class="form-label">Year*</label>
                               <select class="form-select" name="tambah" id="tambah" aria-label="Default select example">
                                  <option value="{{ old('tambah', $data->first()->tambah ?? '') }}" disabled selected>{{ old('tambah', $data->first()->tambah ?? '') }}</option>
                                  <option value="1960">1961</option>
                                  <option value="1962">1962</option>
                                  <option value="1963">1963</option>
                                  <option value="1964">1964</option>
                                  <option value="1965">1965</option>
                                  <option value="1966">1967</option>
                                  <option value="1968">1968</option>
                                  <option value="1969">1969</option>
                                  <option value="1970">1971</option>
                                  <option value="1972">1972</option>
                                  <option value="1973">1973</option>
                                  <option value="1974">1974</option>
                                  <option value="1975">1975</option>
                                  <option value="1976">1976</option>
                                  <option value="1977">1977</option>
                                  <option value="1978">1978</option>
                                  <option value="1979">1979</option>
                                  <option value="1980">1980</option>
                                  <option value="1981">1981</option>
                                  <option value="1982">1982</option>
                                  <option value="1983">1983</option>
                                  <option value="1984">1984</option>
                                  <option value="1985">1985</option>
                                  <option value="1986">1986</option>
                                  <option value="1987">1987</option>
                                  <option value="1988">1988</option>
                                  <option value="1989">1989</option>
                                  <option value="1990">1990</option>
                                  <option value="1991">1991</option>
                                  <option value="1992">1992</option>
                                  <option value="1993">1993</option>
                                  <option value="1994">1994</option>
                                  <option value="1995">1995</option>
                                  <option value="1996">1996</option>
                                  <option value="1997">1997</option>
                                  <option value="1998">1998</option>
                                  <option value="1999">1999</option>
                                  <option value="2000">2000</option>
                                  <option value="2001">2001</option>
                                  <option value="2002">2002</option>
                                  <option value="2003">2003</option>
                                  <option value="2004">2004</option>
                                  <option value="2005">2005</option>
                                  <option value="2006">2006</option>
                                  <option value="2007">2007</option>
                                  <option value="2008">2008</option>
                                  <option value="2009">2009</option>
                                  <option value="2010">2010</option>
                                  <option value="2011">2011</option>
                                  <option value="2012">2012</option>
                                  <option value="2013">2013</option>
                                  <option value="2014">2014</option>
                                  <option value="2015">2015</option>
                                  <option value="2016">2016</option>
                                  <option value="2017">2017</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                                </select>
                              </div>
                              </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="deskripsis" class="form-label">Description</label>
                        <input type="text" name="deskripsis" class="form-control" id="deskripsis" aria-describedby="emailHelp" value="{{ old('deskripsis', $data->first()->deskripsis ?? '') }}">
                    </div>
                  </div>
                  <button class="btn btn-info" type="submit">Submit</button>
                  </div>
                      {{-- <button onclick="prevSlide(1)">Kembali</button>
                      <button onclick="nextSlide(2)">Selanjutnya</button> --}}
                      

                </form>
                </div>
              </div>
             </div>
          </div>
        </div>
      </div>       