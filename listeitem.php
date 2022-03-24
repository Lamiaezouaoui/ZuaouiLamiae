<?PHP
  include 'topnav.php'; 
  include 'config.php';
  $var=$row='';
    $sql="SELECT*FROM ETUDIANT ";
    $varsult=mysqli_query($conn,$sql);
        if(mysqli_num_rows($varsult)>0){
            while($row=mysqli_fetch_assoc($varsult)){
                $var.=
             ' <tr>
                    <td>'.$row["EtudiantId"].'</td>
                    <td>'.$row["Nom"].'</td>
                    <td>'.$row["Prenom"].'</td>
                    <td>'.$row["Adresse"].'</td>
                    <td>'.$row["Classe"].'</td>
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
    <title>list etudiant</title>
    <link rel="stylesheet" href="css/listeitem.css"/>
</head>
<body>
    <fieldset class="wrapper">
        <form action="" method="post">

            <h1 class="titleAddItem">liste Etudiant</h1>
            <hr>
            <div class="<?php echo @$_SESSION['ee'] ;?>"> <!--le message de reussit ou l'erreur ou de reussir -->
                    <?php echo @$_SESSION['erreur'] ;?>
                </div>
                
                <?php $_SESSION['erreur']=$_SESSION['ee'] ='';?>

            <table class="listeitemtable" >
                <tr>
                    <td class="cel1">Code</td>
                    <td class="cel2">Nom</td>
                    <td class="cel3">Prenom</td>
                    <td class="cel4">Adresse</td>
                    <td class="cel5">Classe</td>
                    
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