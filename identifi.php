

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="iden.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>espace d'identification</title>
</head>
<body style="background:black;font-size: 20px; padding: 40px; border-radius: 20px;">
    
<h1 class="col-10"
     style="color: black; margin-left: 100px; text-align:center; color: rgb(250, 246, 246);
      top: 10px;">Votre espace d'enrégistrement </h1><br/>
<h2><marquee style="background-color: white;color:red;width:100%;font-weight: bold; ">Espace spécifique pour les enrégistrements. ''Athentification nécéssaire'' !</marquee></h2>
<div class="iden">
   <form method="POST" action="" role="form" style="padding: 40px;color: rgb(250, 246, 246)">


   <!---- <div class="col-md-6">
                                <label for="firstname">Prénom <span class="blue">*</span></label>
                                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Nom <span class="blue">*</span></label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
                                <p class="comments"></p>
                            </div>
                            ---->

                            <div class="row">
               <div class="col-lg-10 col-lg-offset-1">
      <div class="row">
                            <div class="col-md-4">
                            <label for="nom">Nom & Prénoms : </label>
               <input type="text" name="nom" placeholder="votre nom comple" required> <br/>
</div>

<div class="col-md-4 offset-2">           
               <label for="email">Email : </label>
               <input type="email" name="email" placeholder="votre email" required> <br/>
               </div>

          <div class="col-md-4">
               <label for="password">Mot de passe :</label>
               <input type="password" name="password" placeholder="*******" required > <br/>
               </div>

               <div class="col-md-4 offset-2"> 
               <label for="password">Confirmez le mot de passe :</label>
               <input type="password" name="password_confirm" placeholder=" *******"required> <br/>
               </div>
<div class="col-md-4">
       <input style="color:red;padding: 5px;margin: 50px; border-raduis:40px; hover:black" type="submit" name="formsend" id="formsend" value="s'inscrir">
       </div>  
       </div> 
       </div>
       </div>     
                </form>
                </div>
           
                <?php include 'identite.php'?>
               
</body>
</html>