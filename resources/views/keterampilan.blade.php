@extends('layout.content1')
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
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
  <div class="col-8; align-items: center;">
    <div class="card">
      <div class="card-body">
        <form action="/insertdataketerampilan" method="POST" enctype="multipart/form-data"
          onsubmit="return validateForm()">
          @csrf
          <div style="display: flex; align-items: center;">
            <img src="image/skill-level-intermediate_.png" alt="Profil Image" style="margin-right: 15px; width: 30px;">
            <h2 class="header-profil">KETERAMPILAN</h2>
          </div>
          <hr style="margin-top: 0px; margin-bottom: 20px; color:#000000;">


          <div class="mb-5">
            <label for="Keterampilan" class="form-label"></label>
            <table class="table table-bordered" style="border-color: #f50202">
              <thead style="background-color:rgb(252, 252, 228);">
                  <tr class="table-bordered" style="border-color: #000000">
                  <th>Keahlian</th>
                  <th>Tahun Pengalaman</th>
                  <th>Level</th>
                </tr>
              </thead>
              <tbody id="Keterampilan">
                <tr>
                  <td><input type="text" class="form-control" name="Keterampilan[0][skill]" placeholder="Keahlian"></td>
                  <td><input type="text" class="form-control" name="Keterampilan[0][tahunPengalaman]" placeholder="mis. 2 Tahun"></td>
                  <td><select class="form-select" name="Keterampilan[0][level]">
                      <option value="Novice">Novice (Pemula)</option>
                      <option value="Novice">Competent (Mampu)</option>
                      <option value="Novice">Proficient (Cakap) </option>
                      <option value="Intermediate">Expert (Ahli)</option>
                      <option value="Intermediate">Master</option>
                    </select></td>
                </tr>
              </tbody>
            </table>
            <button type="button" class="btn btn-info" id="tambahKeterampilan" style="width: 120px;">
              <img src="image/plus_.png" alt="Icon" style="vertical-align: middle; margin-right: 10px; width: 20px;">
              Tambah
            </button>
  
            <button class="btn btn-success" style="float: right;" type="submit">
              Submit</button>
          </div>

        </form>
        <div class="row mt-5" style="width: 1080px">
          <table class="table" style="margin-left: 10px; margin-right: 10px;">
              <thead class="thead-dark" style="width: 1000px">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Skill</th>
                <th scope="col">Tahun Pengalaman</th>
                <th scope="col">Level</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @php
              $no = 1;
              @endphp
              @foreach ($data as $rowket)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $rowket->skill }}</td>
                <td>{{ $rowket->tahunPengalaman }}</td>
                <td>{{ $rowket->level }}</td>
                <td>
                  <a href="/deleteketerampilan/{{ $rowket->id }}" class="btn btn-danger">Delete</a>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="/tampilketerampilan" class="btn btn-warning text-black">Edit</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  let KeterampilanIndex = 1;

  document.getElementById('tambahKeterampilan').addEventListener('click', function () {
    let newRow = document.createElement('tr');
    newRow.innerHTML = `
                      <tr>
                      <td><input type="text" class="form-control" name="Keterampilan[${KeterampilanIndex}][skill]" placeholder="Keahlian"></td>
                      <td><input type="text" class="form-control" name="Keterampilan[${KeterampilanIndex}][tahunPengalaman]" placeholder="Tahun Pengalaman"></td>
                      <td><select class="form-select" name="Keterampilan[${KeterampilanIndex}][level]">
                      <option value="Novice">Novice (Pemula)</option>
                      <option value="Competent">Competent (Mampu)</option>
                      <option value="Proficient">Proficient (Cakap) </option>
                      <option value="Expert">Expert (Ahli)</option>
                      <option value="Master">Master</option>
                      </select></td>
                      </tr>
                      `;
    document.getElementById('Keterampilan').appendChild(newRow);
    KeterampilanIndex++;
  });
</script>

<script src="{{ asset('admin') }}/vendors/base/vendor.bundle.base.js"></script>
<script src="{{ asset('admin') }}/vendors/chart.js/Chart.min.js"></script>
<script src="{{ asset('admin') }}/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="{{ asset('admin') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="{{ asset('admin') }}/js/off-canvas.js"></script>
<script src="{{ asset('admin') }}/js/hoverable-collapse.js"></script>
<script src="{{ asset('admin') }}/js/template.js"></script>
<script src="{{ asset('admin') }}/js/dashboard.js"></script>
<script src="{{ asset('admin') }}/js/data-table.js"></script>
<script src="{{ asset('admin') }}/js/jquery.dataTables.js"></script>
<script src="{{ asset('admin') }}/js/dataTables.bootstrap4.js"></script>
<script src="{{ asset('admin') }}/js/jquery.cookie.js" type="text/javascript">
</script>
@endsection
</body>