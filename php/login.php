 <?php

 include "config.php";

 $user = $_POST['user'];
 $password = $_POST['password'];

          if ($con -> connect_errno) {
            echo "Failed to connect to MySQL: " . $con -> connect_error;
            exit();
          }
          
          $sql = "SELECT senha FROM alunos WHERE login='$user'";
          $result = mysqli_query($con, $sql);
          while($row = $result->fetch_assoc()){
            if(!$row){
              echo $con->connect_error . ", " . $con->connect_errno; 
              echo "ERROR";
              break;
            } else {
              if($row['senha'] === $password){
                echo 1;
              } else {
                echo 0;
              }
            }
          }
        ?>