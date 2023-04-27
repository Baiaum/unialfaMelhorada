<?php
  include 'config.php';
  $cookieName = "user";
  $user = $_POST['user'];
if(!isset($_POST['user'])){
  $sql = "SELECT * FROM alunos WHERE login='$user'";
  $result = mysqli_query($con, $sql);
  while($row = $result->fetch_assoc()){
      $cookieValue = $row['login'];
      setcookie($cookieName, $cookieValue, time()+(3600*24*2), '/');
      //$_SESSION['currentUser'] = strval($row['login']);
      //echo $_COOKIE[$cookieName];
    }
}

?>