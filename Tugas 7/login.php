<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="Assets/icon.ico"/>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css"/>

</head>

<body>

    <script src = "main.js"></script>
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <header class="header2">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <img src="Assets/xyz-seeklogo.com.svg" width="50" height="30" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24" style="filter: brightness(0) invert(1);"></img>
            <a class="navbar-brand" href="index.html">XYZ Corporation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" id="list1" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="list1" href="register.php">Register</a>
                    </li>
                  </ul>
                </ul>
            </div>
        </div>
      </nav>
    </header>

    <section id="logo1">
        <div class="container" style="margin-top: 100px;">
            <div class="row text-center mb-3">
                <h2 class="greeting">Login</h2>
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
      <path
        fill="#4b4e50"
        fill-opacity="1"
        d="M 0 19 C 492 10 492 94 1011 61 L 1441 23 L 1440 150 L 0 150 Z"
      ></path>
    </svg>

    <section id="registrasi" style="background-color: #4b4e50;">
        <div class="container" style="width:50%">
            <main>
            <br>
            <form action="do_login.php" method="POST" enctype="multipart/form-data">         
                <div class="row g-4">                 
                    <div class="col-sm-12">
                        <label for="firstName" class="form-label">Username</label>
                        <input type="text" class="form-control" name="uname" id="uname" placeholder="Username" onkeyup = "check()">
                    </div>

                    <div class="col-sm-12">
                        <label for="lastName" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" onkeyup = "check()">
                    </div>
                </div>
                <button class="submit btn btn-dark mt-4" type="submit" name="login" id="login" disabled>Login</button>
            </form>
            <br>
            <br>
            </main>
        </div>
    </section>
    

    <section style="background-color: #4b4e50; padding-top: 50px;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
            <path
              fill="#212529"
              fill-opacity="1"
              d="M 0 19 C 448.78 220.816 1031.011 -62.491 1440.617 24.329 L 1441 23 L 1440 150 L 0 150 Z"
            ></path>
          </svg>
    </section>

    <footer class="bg-dark text-white text-center pb-5";">
        <br>
        <p>&copy; 2022 Hagi Azzam Azzikri - 2010631170076 - 4C</p>
        <p>
          <a href=#>Back To Top</a>
        </p>
    </footer>

    <script type="text/javascript">
    function check()
    {
        var uname = document.getElementById("uname").value;
        var pass = document.getElementById("pass").value;
        var button = document.getElementById("login");

        if(uname.length < 1 || pass.length < 1){
            button.disabled = true;
        }
        else{
            button.disabled = false;
        }
    }
    </script>

</body>
</html>