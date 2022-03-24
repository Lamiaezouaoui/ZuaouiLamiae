<?php
 include 'topnav.php';
 include 'config.php';
 $matricule ='';
 $Nom='';
 $date = '';
 $actif = '';
 $fonction = '';
 $section = '';
 $nomNonModifie = '';
 $matricule = $_SESSION['mat'];
 $sql = "SELECT * FROM employes WHERE Matricule = '$matricule' ";
 $table = '';
 $row = '';
 $result = mysqli_query($conn, $sql);
 echo mysqli_error($conn);
 if (mysqli_num_rows($result) > 0) {
//output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    $nomNonModifie = $row["Nom_E"];
    $prenomModifie = $row["Prenom_E"];
    $dateModifie = $row["DateEmbauche"];
   }
   
 }  
 if (isset($_POST['Modifier'])){
    $matricule = $_POST['ma'];
        $nom = $_POST['nom'];
        $prenom = $_POST['pr'];
        $date = $_POST['date'];
        $actif = $_POST['actif'];
        $fonction = $_POST['fonction'];
        $section = $_POST['section'];
    $b=true;
    if(empty($matricule)){
        $E200="Saisir votre matricule";
        $b=false;
    }
    if(empty($nom)){
        $E210="Saisir votre Nom";
        $b=false;
    }
    if(empty($prenom)){
        $E220="Saisir votre Prenom";
        $b=false;
    }
    if(empty($date)){
        $E230="Saisir votre date";
        $b=false;
    }
    if(empty($actif)){
        $E240="Selectionner votre actif";
        $b=false;
    }
    if(empty($fonction)){
        $E250="Selectionner votre fonction";
        $b=false;
    }
    if(empty($section)){
        $E260="Selectionner votre section";
        $b=false;
    }
    if($b){
        $sql1 ="UPDATE employes SET Matricule ='$matricule', Nom_E = '$nom', Prenom_E = '$prenom',DateEmbauche = '$date', Actif ='$actif', id_F ='$fonction', id_Se ='$section' where Matricule = '$matricule'";
    mysqli_query($conn, $sql1);
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <style>
        span{
            color: red;
        }
        form {
    
    margin: 20px;
    padding: 20px 0px;
    border-radius: 5px;
}
       
.cc{
        width: 700px;
        height:40px;
        
   }
.cc1{
    margin-top: 20px;
    margin-left: 857px;
    }  
    </style>
</head>




<body>
<a class="bi bi-arrow-bar-left cc1 btn btn-primary mb-1 "  href="Employes.php" >Modifier</a>
    <center>
    <form action="Button_Modifier.php" method="POST">
    <table>
        <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Matricule</label>
                <input type="text" name="ma" class="form-control cc"
                 class="cc" id="formGroupExampleInput2" placeholder="Saisir Votre Matricule" value="<?php  echo $matricule;?>">  <br>
                <span><?php $E200;?></span>
            </td>  
        </tr>
        <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Nom</label>
                <input type="text" name="nom" class="form-control"
                 class="cc" id="formGroupExampleInput2" placeholder="Saisir Votre Nom" value="<?php  echo $nomNonModifie;?>">  <br>
                <span><?php $E210;?></span>
            </td>  
        </tr>
        <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Prenom</label>
                <input type="text" name="pr" class="form-control"
                 class="cc" id="formGroupExampleInput2" placeholder="Saisir Votre Prenom" value="<?php  echo $prenomModifie;?>">  <br>
                <span><?php $E220;?></span>
            </td>  
        </tr>  
        </tr>
            <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Date d'Embauche</label>
                <input type="date" name="date" class="form-control"
                 class="cc" id="formGroupExampleInput2" placeholder="Another input" value="<?php  echo $dateModifie;?>"> <br>
                <span><?php $E230;?></span>
            </td>  
        </tr>
        <tr>
        <td>
                <form class="form-inline"    class="cc">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref" >Actif</label>
                    <select  name="actif" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        <option value="Actif">Actif</option>
                        <option value="sortant">sortant</option>
                    </select><br>
                <span><?php $E240;?></span>
                </td>
            </tr>
            <tr>
            <td>
            <form class="form-inline"   class="cc">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Fonction</label>
                    <select   name="fonction"class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        <option value="1">GESTIONNAIRE DE STOCK</option>
                        <option value="2">ADJOINT CHEF D'USING</option>
                    </select><br>
                <span><?php $E250;?></span>
            </td>  
        </tr>
        <tr>
            <td></td>
            </tr>
            <tr>
            <td>
            <form class="form-inline"   class="cc">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Section</label> 
                    <select  name="section" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        <option value="1">ADMINISTRATION</option>
                        <option value="ATE">ATELIER</option>
                    </select><br>
                <span><?php $E260;?></span>
            </td>  
        </tr> 
    </table><br>
    <input type="submit" name="Modifier" value="Modifier" class="btn btn-outline-success">
  
    </form>
    </center>
</body>
</html>