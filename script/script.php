#comando php script.php Riccardo Silvi

<?php
  //$argv[0] nome del file, successivi gli argomenti passati al comando

  //contorllo che entrambi gli argomenti siano stati inseriti
  if (isset($argv[1]) && isset($argv[2])) {
    //Rimuovo gli spazi
    $nome = str_replace(" ", "", $argv[1]);
    $cognome = str_replace(" ", "", $argv[2]);
    //Controllo la lunghezza della stringa
    if(strlen($nome) <= 1 && strlen($cognome) <= 1) {
      echo "Dati troppo brevi per essere veri";
    } else {
      //prime lettere maiuscole
      $nomeCapitalized = ucfirst($nome);
      $cognomeCapitalized = ucfirst($cognome);
      echo "Ciao $nomeCapitalized $cognomeCapitalized\n";
    }
  } else {
    //isset ha restituito false per uno degli argomenti
    echo "Non hai immesso correttamente gli argomenti\n";
  }
 ?>
