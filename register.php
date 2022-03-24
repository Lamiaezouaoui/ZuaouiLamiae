<?php
    require 'config.php';
    $error='';
    $error1='';
    $error2='';
    if(isset($_POST['inp'])){
        $inpuser = $_POST['inputno'];
        $inpemail = $_POST['inputpr'];
        $inpmod = $_POST['inputmod']; 
    if (empty($inpuser) ){
        $error='votre nom ...';  
    } 
    if (empty($inpemail) ){
        $error.='votre email ...';  
    }  
    if (empty($inpmod) ){
        $error.='votre mod ...';  
    } 
    if(empty($error)){
    $sql = "INSERT INTO users (username,email,password)
      VALUES ('$inpuser','$inpemail','$inpmod')";
    if (!mysqli_query($conn,$sql)) {
        echo  $error.= "Error:" .$sql."<br>".mysqli_error($conn);
    } else {
        header("location:login.php");
    
        }
    }
    }
   
    ?>
    
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form action="register.php" method="POST">
        <div class="register">
            <div  class="title">
                <h1>votre app </h1>
            </div>
            <input type="text" name="inputno" placeholder="Nom d'administrateur"> <br> 
            <input  placeholder="Email" type="text" name="inputpr"></BR>
            <input type="password" placeholder="Mod de passe"  name="inputmod"> </BR>
            <SPan class="span" name='sp3' ><?php echo $error; ?></SPan> </BR>
            <input type="submit" value="inscrit" name="inp"  class="btn btn-primary btn-connec"/></br>
            <p class="par"><a href="login.php"> Déja inscrit ?</a><p>
        </div>
    </from>   

</body>
   
</html>
