<?php

if(isset($_POST['formsend'])){
    extract($_POST);
    if(!empty($password) && !empty($password_confirm) && !empty($email)){
        if($password == $password_confirm){
            $option = [
                'cost' => 12,
            ];
            $hashpass = password_hash($password, PASSWORD_BCRYPT, $option);
            
            include 'dtbases.php';
            global $db;

              $c = $db->prepare("SELECT email FROM gestionnaire WHERE email = :email");
              $c->execute(['email' => $email]);
              $result = $c->rowCount();

              if($result == 0)
              {
            $q = $db->prepare("INSERT INTO gestionnaire(email, password) VALUES(:email, :password)");
            $q->execute([
                'email' => $email,
                'password' => $hashpass
            ]);
            echo " <p style='color:green;margin-left:300px'>Votre compte a été créée avec succès !  Cliquez <a style='color:white;text-decoration:none' href='connect.php'>ici</a>
            pour vous connectez</p>";
            // echo "Rappelle ". "<br/>";
            // echo "Votre pseudo est :" . $_POST['pseudo']. "<br/>";
            // echo "Votre email est :" . $_POST['email']. "<br/>";
            // echo "Votre password est :" . $_POST['password']. "<br/>";

        }else{
            echo "<p style='color:red;margin-left:300px'>Ce compte existe deja ! Cliquez <a style='color:white;text-decoration:none' href='connect.php'>ici</a>
             pour vous connectez </p>";
          }
        }
    }
}
?>