<?php
// controllo di ricevere l'input
var_dump($_GET["input"]);

// mi creo un array per i simboli da utilizzare nella funzione genera password
$simboli = array();

$simboli["minuscole"] = 'abcdefghijklmnopqrstuvwxyz';
$simboli["maiuscole"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$simboli["numeri"] = '1234567890';
$simboli["caratteri_speciali"] = '!?~@#-_+<>[]{}';

var_dump($simboli);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="get">
    <div class="input-group mb-3">
      <input type="number" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1"
        name="input">
      <button type="submit">Submit</button>
    </div>
  </form>
</body>

</html>