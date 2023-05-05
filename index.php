<?php
// controllo di ricevere l'input
var_dump($_GET["input"]);

// mi creo un array per i simboli da utilizzare nella funzione genera password
$simboli = array();

$simboli["minuscole"] = 'abcdefghijklmnopqrstuvwxyz';
$simboli["maiuscole"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$simboli["numeri"] = '1234567890';
$simboli["caratteri_speciali"] = '!?~@#-_+<>[]{}';

// controllo l'array
var_dump($simboli);

// metto l'input in una variabile
$passwordLength = $_GET["input"];

// l'idea per generare la password è: prendo l'array di simboli e li mescolo tra di loro, poi da questo array mescolato voglio prendere randomicamente tanti simboli quanti sono quelli richiesti dall'utente e generare così una nuova password
function generatePassword($passwordLength, $simboli){
  // mi preparo la stringa per la password
  $password = "";
  // mescolo i simboli
  shuffle($simboli);
  // ciclo dentro l'array simboli quante volte mi ha detto l'utente
  for ($i = 0; $i < $passwordLength; $i++) {
    // mi prendo una chiave random dall'array
    $key = array_rand($simboli);
    //ora devo prendermi un carattere random dagli array selezionati dentro i simboli
    
    
}
}


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