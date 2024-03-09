<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <?php include __DIR__ . '/menu.php'; ?>

  <?php

  /* 
  Snack 2
  Con un form passare come parametri GET name, mail e age,
  verificare che name sia più lungo di 3 caratteri, 
  che mail contenga un punto e una chiocciola,
  che age sia un numero. 
  Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
  */

  $form_response = $_GET;
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];
  $message = '';
  $showMessage = false;

  if (!empty($name) && strlen($name) > 3 && !empty($mail) && str_contains($mail, '@') && str_contains($mail, '.') && !empty($age) && is_numeric($age)) {
    $showMessage = true;
    $message = 'Accesso riuscito';

    // Save name to session
    $_SESSION['name'] = $name;
  } else {
    $showMessage = true;
    $message = 'Accesso negato';
  }



  ?>

  <form action="" method="GET">
    <label for="name">Name</label>
    <input type="text" name="name">
    <label for="mail">Mail</label>
    <input type="text" name="mail">
    <label for="age">Age</label>
    <input type="text" name="age">

    <button type="submit">Submit</button>
  </form>

  <?php echo $showMessage ? $message : ''; ?>

</body>

</html>