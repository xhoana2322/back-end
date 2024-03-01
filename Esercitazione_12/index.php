<?php
  session_start();
  if(!isset($_SESSION['userLogin']) && isset($_COOKIE["useremail"]) && isset($_COOKIE["userpassword"])) {
    header('Location: http://localhost/back-end/Esercitazione_12/controller.php?email='.$_COOKIE["useremail"].'&password='.$_COOKIE["userpassword"]);
  } else if(!isset($_SESSION['userLogin'])) {
    //print_r($_SESSION['userLogin']);
    header('Location: http://localhost/back-end/Esercitazione_12/login.php');
  } else 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar w/ text</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
            </ul>
            <span class="navbar-text d-flex">
                <a class="nav-link active" aria-current="page" href="login.html">Login</a>
                <a class="nav-link active ms-3" aria-current="page" href="logout.php">Logout</a>
            </span>
          </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="text-center">Home Page</h1>

        <div class="select-language-form d-flex flex-column align-items-center w-75 mx-auto my-5">
          <p>Seleziona la lingua degli articoli: </p>
          <div class="select-language-btn d-flex w-50">
            <select class="form-select" aria-label="Default select example">
            <option selected>Scegli la lingua...</option>
            <option value="1">Italiano</option>
            <option value="2">Inglese</option>
          </select>
          <a href=""><button type="submit" class="btn btn-primary ms-3">Invia</button></a>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>