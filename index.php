<?php
include __DIR__ . '/helpers/generatePassword.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <h1 class="text-center">PASSWORD GENERATOR</h1>
  <p class="text-center mb-5">Inserisci un numero e il programma genererà per te una password lunga tanti caratteri
    quanto il
    numero inserito.</p>
  <div class="container">
    <div class="row">
      <form action="" method="get" class="d-flex justify-content-center">
        <div class="input-group mb-3 w-25">
          <input type="number" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1"
            name="input">
          <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
      <div class="text-center">
        <h2>Password Generata:</h2>
        <div class="password">
          <?php
          // metto l'input in una variabile
          $passwordLength = $_GET["input"];
          // ora posso richiamare la password e stamparla in pagina
          $password = generatePassword($passwordLength, $simboli);
          echo $password;
          ?>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>