<?php
// controllo di ricevere l'input
//var_dump($_GET["input"]);

// mi creo un array per i simboli da utilizzare nella funzione genera password
$simboli = array();

$simboli["minuscole"] = 'abcdefghijklmnopqrstuvwxyz';
$simboli["maiuscole"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$simboli["numeri"] = '1234567890';
$simboli["caratteri_speciali"] = '!?~@#-_+<>[]{}';

// controllo l'array
//var_dump($simboli);



// l'idea per generare la password è: prendo l'array di simboli e li mescolo tra di loro, poi da questo array mescolato voglio prendere randomicamente tanti simboli quanti sono quelli richiesti dall'utente e generare così una nuova password
function generatePassword($passwordLength, $simboli)
{
  // mi preparo la stringa per la password
  $password = "";
  // mescolo i simboli
  shuffle($simboli);
  // ciclo dentro l'array simboli quante volte mi ha detto l'utente
  for ($i = 0; $i < $passwordLength; $i++) {
    // mi prendo una chiave random dall'array
    $key = array_rand($simboli);
    //ora devo prendermi un carattere random dagli array selezionati dentro i simboli
    $char = substr($simboli[$key], rand(0, strlen($simboli[$key]) - 1), 1);
    // e adesso uso la concatenazione per generare una password
    $password = $password . $char;
  }
  // adesso posso restituire la password
  return $password;
}



?>