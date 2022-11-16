
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cnect.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> accès aux données</title>
</head>
<body style="background-color:black;font-size: 20px; padding: 40px; border-radius: 20px;">

<h3 class="col-10"
     style="color: black; margin-left: 100px; text-align:center; color: rgb(250, 246, 246);
      top: 10px;">Bienvenue sur votre application de gestion animalérie, connectez
       vous sur votre compte. Merci de vous inscrire <a style="text-decoration:none;color:red" href="identifi.php">ici</a> si vous n'avez pas de compte </h3>
<div class="cnect">
   <form action="" method="post" role="form" style="padding: 40px; color: rgb(250, 246, 246)">
   <div class="col-md-4 offset-2">
                                <label for="email1">Email :</label>
                                <input style="border: 1px solid black" id="email1" type="text" name="email1" class="form-control" placeholder="Votre Email">
                               
                            </div>
                            <div style="margin-top 5px;" class="col-md-4 offset-2">
                                <label for="password1">Mot de passe :</label>
                                <input style="border: 1px solid black; margin-top 5px;" id="password1" type="password1" name="password1" class="form-control" placeholder="Votre mot de passe">
                               
                            </div>
                            <input style="color: red; margin-left:300px; padding:10px; margin-top:30px;"
                             type="submit" name="formlogin" id="formlogin" value="se connecter">
               </div> 
                    
                </form>
                </div>

                <?php include 'connexion.php' ; ?>
                
              <div>
             
              
            </div>
          </div>
        </div>
      
  
   </div> 
   
</body>
</html>