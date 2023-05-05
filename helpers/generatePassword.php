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
$newSimbols = implode('', $simboli);

// l'idea per generare la password è: prendo l'array di simboli e li mescolo tra di loro, poi da questo array mescolato voglio prendere randomicamente tanti simboli quanti sono quelli richiesti dall'utente e generare così una nuova password
function generatePassword($passwordLength, $newSimbols)
{
  // mi preparo la stringa per la password
  $password = "";
  // converto la stringa in un array di caratteri
  $newSimbolsArray = str_split($newSimbols);
  // mescolo i simboli
  shuffle($newSimbolsArray);
  // ciclo dentro l'array simboli quante volte mi ha detto l'utente
  for ($i = 0; $i < $passwordLength; $i++) {
    $char = rand(0, count($newSimbolsArray) - 1);
    // e adesso uso la concatenazione per generare una password
    $password = $password . $newSimbolsArray[$char];
  }
  // adesso posso restituire la password
  return $password;
}