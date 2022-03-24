<?PHP
  include 'topnav.php'; 
  include 'config.php';
  $var=$row='';
    $sql="SELECT*FROM LIVRE ";
    $varsult=mysqli_query($conn,$sql);
      if(mysqli_num_rows($varsult)>0){
         while($row=mysqli_fetch_assoc($varsult)){
            $var.=
           ' <tr>
                <td>'.$row["LivreId"].'</td>
                <td>'.$row["Titre"].'</td>
                <td>'.$row["Auteur"].'</td>
                <td>'.$row["DateEdition"].'</td>
            </tr>'.'<br>';
         
         }        
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list livre</title>
    <link rel="stylesheet" href="css/listsecitem.css"/>
    
</head>
<body>
   <fieldset  class="wrapper">
        
        <form action="" method="post">
            <h1 class="titleAddItem">liste Livre</h1>
            <hr>
            <div class="<?php echo @$_SESSION['ee'] ;?>"> <!--le message de reussit ou l'erreur ou de reussir -->
                    <?php echo @$_SESSION['erreur'] ;?>
            </div>
                
            <?php $_SESSION['erreur']=$_SESSION['ee'] ='';?>


            <table class="listeitemtable">
                <tr >
                    <td class="cel1">Code</td>
                    <td class="cel2">Titre</td>
                    <td class="cel3">Auteur</td>
                    <td class="cel4">Date d'edition </td>
                </tr>
                <?PHP  ECHO $var;?>
            </table>
        </form> 
   </fieldset> 

   <script>
        $(document).ready(function() {
            // show the alert
            setTimeout(function() {
                $(".alert").alert('close');
            }, 3000);
        });
    </script>
   <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>