 <?php
 include "config.php";
 
 $user = $_POST['user'];
 $password = $_POST['password'];

          if(empty($user)||empty($password)){
            echo 2;
          }
          $sql = "SELECT * FROM alunos WHERE login='$user'";
          $result = mysqli_query($con, $sql);
          while($row = $result->fetch_assoc()){
              if($row['senha'] === $password){
                echo 1;
              } else {
                echo 0;
              }
            }
        ?>