<?php 

include 'config.php';
$Nom='';
$Password='';
$Select='';
$Hallaoui='';
$E1='';
$E2='';
$E3='';
$E10='';
$H='';
$fix='';
$_SESSION['inputno']='';
$B=true;
if (isset($_POST['Login'])){
$fix='checked';
$Nom=$_POST['nom'];
$Password=$_POST['pswd'];
$Select=$_POST['sc'];
 session_start();
$_SESSION['inputno']=$Nom;
if(isset($_POST['sc'])){
    $Hallaoui=$_POST['sc'];
  if($Hallaoui=='ElHallaoui'){
      $H='selected';
  }
}
if(empty($Nom)){
    $E1="Saisir votre Nom";
    $B=false;
}
if(empty($Password)){
    $E2="Saisir votre Password";
    $B=false;
}
if(empty($Select)){
    $E3="Selectionner une";
    $B=false;
}
if($B){
    if($Nom=='Bouchra' && $Password=='123'){
        header("location: index.php");
        
    }
    else{
        $E10 ='Votre mot de passe est incorrect.';
    }
    
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
<center>
    <div class="main">
        <input type="checkbox" id="chk" <?php echo $fix;?> aria-hidden="true">
        <div class="sig">
        </div>
      
        <div class="login">
            <form action="login.php" method="POST" >
                <label for="chk" aria-hidden="true">login</label>
                <input type="text" name="nom" placeholder="Nom D'utilisateur">
            <span><?php echo $E1;?></span>
            
                <input type="password" name='pswd'  class="in" placeholder="Password" required> 
            <span><?php echo $E2;?></span>

                <select name="sc" id="sc" class="nouveau" required placeholder="Choose..">
                     <option value="ElHallaoui" <?php echo $H;?>>El Hallaoui Sarl </option>
                 </select> <br>
            <span><?php echo $E3;?></span> <br>
            <span><?php echo $E10;?></span>

                 <input type="submit" value="Login" name="Login" id="lg" >
            </form>
        </div>
        </div>
</center>
</body>
</html>