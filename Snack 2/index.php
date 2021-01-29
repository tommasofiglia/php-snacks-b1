<!-- -Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato” -->

<?php
  $name = $_GET["name"];
  $email = $_GET["email"];
  $age = $_GET["age"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snack 2 PHP</title>
  </head>
  <body>
    <h1>
      <?php
      if (strlen($name)>3 && is_numeric($age) && strpos($email , '.')!==false  && strpos($email , '@')!==false){
        echo "Accesso consentito";
      } else{
        echo "Accesso negato";
      }
      ?>
    </h1>
  </body>
</html>
