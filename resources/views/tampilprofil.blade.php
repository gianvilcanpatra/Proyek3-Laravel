@extends('layout.content')

@section('card')
<div class="row justify-content-center">
    <div class="col-8; align-items: center;">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('updatedata', ['id' => $data->user_id]) }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                    @method('PUT')
                    <div style="display: flex; align-items: center;">
                        <img src="image/user-profile_.png" alt="Profil Image"
                            style="margin-right: -5px; width: 30px; margin-bottom:10px">
                        <h2 class="header-profil">PROFIL</h2>
                    </div>
                    <hr style="margin-top: 0px; margin-bottom: 30px; color:#000000;">
                    <div class="container mb-4">
                        <div class="row-1">
                            <div class="profile-section">
                                <div class="profile-image">
                                    @if($data &&$data->image)
                                    <img src="{{ asset('fotoprofil/' . $data->image) }}"
                                        alt="Profile Image">
                                    @else
                                    <img src="{{ asset('image/profil.png') }}" alt="Profile Image">
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
                                    <label for="exampleInputEmail1" class="form-label">First
                                        Name*</label>
                                    <input type="text" name="firstName" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{ old('firstName', $data ? $data->firstName : '') }}"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Last
                                        Name*</label>
                                    <input type="text" name="lastName" class="form-control"
                                        id="exampleInputPassword1"
                                        value="{{ old('lastName', $data->lastName ?? '') }}">
                                </div>
                            </div>
                        </div>


                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nomorTelepon" class="form-label">Nomor
                                        Handphone*</label>
                                    <input type="number" name="nomorTelepon" class="form-control"
                                        id="nomorTelepon"
                                        value="{{ old('nomorTelepon', $data->nomorTelepon ?? '') }}"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="emailUser" class="form-label">Email*</label>
                                    <input type="email" name="emailUser" class="form-control"
                                        id="emailUser"
                                        value="{{ old('emailUser', $data->emailUser ?? '') }}"
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
                                        value="{{ old('tanggalLahir', $data->tanggalLahir ?? '') }}"
                                        required max="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <div class="col-4 custom-col">
                                    <label for="exampleInputPassword1"
                                        class="form-label">Gender*</label>
                                    <select class="form-select" name="gender"
                                        aria-label="Default select example" required>
                                        <option
                                            value="{{ old('gender', $data->gender ?? '') }}"
                                            disabled selected>{{ old('gender',
                                            $data->gender ?? '') }}
                                        </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-4 custom-col">
                                    <label for="country" class="form-label">Nationality*</label>
                                    <select class="form-select" name="country"
                                        aria-label="Default select example" required>
                                        <option
                                            value="{{ old('country', $data->country ?? '') }}">
                                            {{
                                            old('country', $data->country ?? '') }}
                                        </option>

                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Zimbabwe">Zimbabwe</option>

                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Address*</label>
                            <input type="text" name="address" class="form-control"
                                id="exampleInputPassword1"
                                value="{{ old('address', $data->address ?? '') }}"
                                required>
                        </div>


                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Description</label>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                                value="{{ old('deskripsi', $data->deskripsi ?? '') }}">
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-success" style="float: right;"
                                type="submit">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection