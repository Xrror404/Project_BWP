<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
          #RememberMe:hover {
              cursor: pointer;
          }
      </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container align-items-center">
                <img class="pl-5 pt-2" style="height: 7em; width: 7em;" src="../Assets/LogoISTTS.png" alt=""
                    srcset="">
            </div>
        </nav>
    </header>

    <body class="p-0">
        <div class="container-fluid pt-3">
            <div class="row pl-3">
                <div class="col-md-6">
                    <img src="../Assets/ImgLogin.svg" class="img-fluid pl-3 pr-2" alt="" srcset="">
                </div>
                <div class="col-md-6">
                    <div class="container p-2">
                      <h1>Sistem ISTTS</h1>
                      <form action=""method="POST">
                        <div class="form-group pt-2">
                          <p class="p-0"><b>Username</b></p>
                          <input type="text" name="Username" id=""placeholder="Username"style="width:100%;height:3em;">
                        </div>
                        <div class="form-group pt-2">
                          <p class="p-0"><b>Password</b></p>
                          <input type="password" name="Password" id=""placeholder="Password"style="width:100%;height:3em;">
                        </div>
                        <div class="form-group pt-2">
                          <input type="checkbox" name="RememberMe" id="RememberMe"><span class="p-2">Remember Me</span>
                        </div>
                        <div class="form-group pt-2">
                          <button type="submit" name="LoginBtn" class="btn btn-info btn-rounded text-light pt-2 pb-2 pl-4 pr-4">Sign In</button>
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
</body>

</html>
