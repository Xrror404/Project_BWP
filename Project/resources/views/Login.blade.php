@section('pesansponsor')
    @if (Session::has('pesansukses'))
        @if (Session::get('tipe') == 'sukses')
            <div class="alert alert-success">{{ Session::get('pesansukses') }}</div>
        @else
            <div class="alert alert-danger">{{ Session::get('pesansukses') }}</div>
        @endif
    @endif
@endsection
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="icon" href="../Assets/logoistts.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #RememberMe:hover {
            cursor: pointer;
        }

        #loginbtn:hover {
            background-color: #007bff;
        }

        .password-container {
            position: relative;
            width: 100%;
        }

        .show-password {
            position: absolute;
            right: 0.5em;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            z-index: 1000;
        }

        .logo-img {
            transition: transform 0.3s ease-in-out;
        }

        .logo-img:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container align-items-center">
                <img id="logoImg" class="pl-5 pt-2 logo-img" style="height: 7em; width: 7em;"
                    src="../Assets/logoistts.png" alt="" srcset="">
            </div>
        </nav>
    </header>

    <body class="p-0">
        <div class="container-fluid pt-3">
            <div class="row pl-3">
                <div class="col-md-6">
                    <img src="../Assets/ImgLogin.svg" class="img-fluid pl-3 pr-2" alt="" srcset="" id="loginImage">
                </div>
                <div class="col-md-6">
                    <div class="container p-2">
                        <h1>Sistem Informasi Mahasiswa</h1>
                        @yield('pesansponsor')
                        <form action="{{ route('LoginForm') }}" method="POST">
                            @csrf
                            <div class="form-group pt-2">
                                <label for="Username"><b>Username</b></label>
                                <input type="text" name="Username" id="Username" placeholder="Username"
                                    style="width:100%;height:3em;">
                            </div>
                            <div class="form-group pt-2">
                                <p class="p-0"><b>Password</b></p>
                                <div class="password-container">
                                    <input type="password" id="password" name="password"
                                        style="width: calc(100% - 2.5em); height: 3em;" placeholder="Password" required>
                                    <span class="show-password" onclick="togglePassword()"
                                        style="position: absolute; right: 0.5em; top: 50%; transform: translateY(-50%); cursor: pointer;">👁️</span>
                                </div>
                            </div>
                            <div class="form-group pt-2">
                                <input type="checkbox" name="RememberMe" id="RememberMe"><span class="p-2">Remember
                                    Me</span>
                            </div>
                            <div class="form-group pt-2">
                                <button type="submit" id="loginbtn" name="LoginBtn"
                                    class="btn btn-info btn-rounded text-light pt-2 pb-2 pl-4 pr-4">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var showPasswordIcon = document.querySelector(".show-password");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                showPasswordIcon.textContent = "👁️";
            } else {
                passwordField.type = "password";
                showPasswordIcon.textContent = "👁️";
            }
        }
    </script>

</body>

</html>
