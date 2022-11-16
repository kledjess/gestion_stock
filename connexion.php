<?php

if(isset($_POST['formlogin'])){
  extract($_POST);
  if(!empty($email1) &&  !empty($password1))
  {
    include 'dtbases.php';
    global $db;

     $q = $db->prepare("SELECT * FROM gestionnaire WHERE email = :email");
     $q->execute(['email' => $email1]);
     $result = $q->fetch();

     if($result == true)
     {
       //le compt existe bien
       if(password_verify($password1, $result['password'])){

           echo "<p style='color:green'>compte accepté <a style='text-decoration:none' href='identifi.php'>Connectez-Vous !</a></p>";
       }
       else{
           echo "<p style='color:red;margin-left:200px'> mot de passe oublier</p>";
       }
  }
  else{
       echo " <p style='color:red'>Authentification nécéssaire. Ce compte n'existe pas !</p>";
       echo " <p style='text-decoration:none;color:white'>cliquez <a style='text-decoration:none;color:red'
        href='identifi.php'> ici</a>  pour vous inscrire </p>";
  }
}
  else{
    echo " <p style='margin-left:300px; color:red'>veuillez remplire le formulaire <p>";

  }
}


?>