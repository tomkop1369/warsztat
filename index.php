<html lang = "en">
   <head>
      <title>Logowanie się</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
</style>
<link href="signin.css" rel="stylesheet">      
   </head>

   <body>
<div class = "container form-signin">      

<?php
$login = $_POST["username"];
$password = $_POST["password"];
require_once('zmienne.php');

$mysqli = new mysqli($host, $username, $haslo, $database);
$query = " SELECT * FROM Users WHERE (E_mail = '$login') AND (Haslo = '$password')";
$query_prepared = $mysqli->stmt_init();
if($query_prepared  && $query_prepared->prepare($query)) {
        $query_prepared->execute();
        }
//$result = $mysqli->query($table);
 ?>
        <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "Podaj adres e-mail" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "Podaj hasło" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "login">Zaloguj się</button>
         </form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

      
