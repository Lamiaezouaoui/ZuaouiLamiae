<?php 
  include 'topnav.php'; 
  include 'slidemenu.php';
  include 'config.php'; 
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des empranters</title>
    <link rel="stylesheet" href="css/listethird.css">
</head>
<body>
    <fieldset>
                
                
        <form action="" method="POST">
            <h1 class="thirdtiltle">liste des empranters</h1>
            <table class="listeitemtable">
                <tr >
                    <td class="cel1">Nom</td>
                    <td  class="cel2">Prenom</td>
                    <td  class="cel3">Titre</td>
                    <td class="cel4">Auteur</td>
                    <td class="cel5">DateEdition</td>
                </tr>
                <?PHP 
                    $list="SELECT   Nom,Prenom,Titre,Auteur,DateEdition FROM `ETUDIANT` 
                                    INNER JOIN `EMPRUNTER` 
                                    ON `EMPRUNTER`.`EtudiantId`=`ETUDIANT`.`EtudiantId`
                                    INNER JOIN `LIVRE` 
                                    ON `EMPRUNTER`.`LivreId`=`LIVRE`.`LivreId`";
                        $result= mysqli_query($conn,$list);
                        $res=mysqli_num_rows($result); 
                        if($res>0){
                            while($row=mysqli_fetch_assoc($result)){ 
                ?>
                    <tr >
                        <td > <?PHP ECHO $row['Nom']?> </td>
                        <td  ><?PHP ECHO $row['Prenom']?></td>
                        <td  > <?PHP ECHO $row['Titre']?></td>
                        <td > <?PHP ECHO $row['Auteur']?></td>
                        <td > <?PHP ECHO $row['DateEdition']?></td>
                    </tr>
                    <?php
                
                    }
                    }
                
                    ?>
            </table>
            <?PHP echo $row; ?>
            
            
        </form> 
    </fieldset>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>