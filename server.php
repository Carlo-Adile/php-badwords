<?php
if (isset($_GET['word']) && isset($_GET['censor'])) {
  /* name dei miei input */
  $paragrafo = $_GET['word'];
  $parola_censurata = $_GET['censor'];

  /* stampiamo paragrafo e lunghezza della stringa */
  echo "<p>Paragrafo: $paragrafo</p>";
  echo "<p>Lunghezza del paragrafo: " . strlen($paragrafo) . "</p>";

  /* stampiamo il paragrafo eventualmente censurato con 3 asterischi */
  $paragrafo_censurato = str_replace($parola_censurata, '***', $paragrafo);
  echo "<p>Paragrafo censurato finale: $paragrafo_censurato</p>";
 
} else {
  echo "Errore: Assicurati di compilare tutti i campi del form.";
}



