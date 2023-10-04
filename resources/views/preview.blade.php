@php
    $userData = session('userData')[count(session('userData')) - 1]; // Retrieve the last data from the session
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
              <img src ="image/home.png"  width="70" height="70"> </a>
          </div>
    </nav>
    <div class="preview">
        <div class="bodyEdit">
            <div class="cv">
                    <div class="horizontal">
                        <img src="image/blankProfile.png" alt="Deskripsi Gambar">
                        <div class="bodyLeft">
                            <div class="Description">
                                <div class="headDesc">
                                    <h1> PROFILE </h1>
                                    <div class="line"></div>
                                </div>
                                <p>Saya adalah ....</p>
                            </div>
                            <div class="Contact">
                                <div class="headCont">
                                    <h2> CONTACT </h2>
                                    <div class="line"></div>
                                </div>
                                <h5>{{ $userData->address }}</h5>
                                <h6>{{ $userData->nomorTelepon }}</h6>
                                <h7>{{ $userData->emailUser }}</h7>
                            </div>
                        </div>
                    </div>
                    <div class="vertical">
                        <div class="boxName">
                            <div class="name">
                            <h3>{{ $userData->firstName }}</h3>
                            <h4>{{ $userData->lastName }}</h4>
                            </div>
                            <h5>Student</h5>
                        </div>
                    </div>
                    <div class="bodyRight">
                        <div class="education">
                            <div class="headEdu">
                                <h3> EDUCATION</h3>
                                <img src="image/ellipse.png">
                            </div>
                            <div class="bodyEdu">
                                <h4> POLITEKNIK NEGERI BANDUNG </h4>
                                <h5>Teknik Informatika</h5>
                                <h6>(2021 - 2025)</h6>
                            </div>
                        </div>
                        <div class="work">
                            <div class="headWork">
                                <h3> WORK </h3>
                                <img src="image/ellipse.png">
                            </div>
                            <div class="bodyWork">
                                <h4> TOKOPEDIA </h4>
                                <h5>Software Development</h5>
                                <h6>(2021 - 2023)</h6>
                            </div>
                        </div>
                        <div class="bahasa">
                            <div class="headBahasa">
                                <h3> LANGUAGE </h3>
                                <img src="image/ellipse.png">
                            </div>
                            <div class="bodyBahasa">
                                <h4> Native Indonesia </h4>
                                <h5> Advanced English </h5>
                            </div>
                        </div>
                        <div class="skill">
                            <div class="headSkill">
                                <h3> SKILLS </h3>
                                <img src="image/ellipse.png">
                            </div>
                            <div class="bodySkill">
                                <h4> Public Speaking </h4>
                                <h5> Problem Solving </h5>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="headerEdit">
                <h1>PREVIEW</h1>
                <h2>CV</h2>
            </div>
            <div class="bodyEdit">
                <div class="buttonUpdate">
                    <div class="edit">
                        <div class="textEdit">
                            <a href="{{ route('edit') }}" class="btn btn-primary">Edit</a>    
                        </div>
                    </div>
                    <div class="delete">
                        <div class="textEdit">
                            <a href="#" class="btn btn-danger">Delete</a>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
