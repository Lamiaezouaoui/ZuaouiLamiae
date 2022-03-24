<?php
    include 'config.php';
    session_start(); 
        $sperror='';
        if(isset($_POST['sendmsg'])){
            $usermail = $_POST['usermail'];


            if( empty($sperror)){
                $sql="SELECT * FROM users where username= '$inpuser' and password ='$inpmod'";
                if(mysqli_num_rows(mysqli_query($conn,$sql))>0){
                    while ($rows=mysqli_fetch_assoc(mysqli_query($conn,$sql))) {
                        $_SESSION['inputno']= $inpuser;
                        header('location:index.php');
                        break;
                    }
                }else{
                    $sperror.='Login echec! verifier votre information';
                }
        

            }    
        }
?>






<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link rel="stylesheet" href="css/login1.css">
        
    </head>
    <body>
        <div class="wrapper fadeInDown">
          <div id="formContent">
            

            
            <div class="fadeIn first">
               <h1>Reientiliser le mots de passe</h1>
            </div>

            
            <form action="valider.php" method="POST">

                <br><span  class="span" name='sp1' > <?php //echo $sperror; ?></span><br>

              <input type="text" id="login" class="fadeIn second" name="incodemail" placeholder="Saisir votre Code " required/>
              <input type="password" id="login" class="fadeIn second" name="inpass1" placeholder="Saisir neaveu mots de passe " required/>
              <input type="password" id="login" class="fadeIn second" name="inppass2" placeholder="confirmer le mots de passe" required/>
              <input type="submit" class="fadeIn fourth" value="confirmer" name="inp"/>

            </form>

            
            <div id="formFooter">
              <a class="underlineHover" href="login.php">page login </a> <br><a class="underlineHover" href="reientiliser.php">message non recus?</a>
            </div>

          </div>
        </div> 

</body>   
</html>