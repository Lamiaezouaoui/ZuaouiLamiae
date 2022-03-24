<?php
include 'config.php';
if(isset($_POST['add'])){
    header('location: button_Employes.php');
}

if(isset($_POST['mod'])){
  header('location:Button_Modifier.php');
}
require_once 'topnav.php';
if(isset($_POST['supprimer'])){
  $matricule = $_SESSION['mat'];
  $sql2 = "DELETE FROM employes where Matricule='$matricule'";
  mysqli_query($conn, $sql2);
}

 $sql = "SELECT * FROM employes";
 $table =$table2='';
 $row =$err='';
 $S='';
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
//output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $table.='<tr>
    <td>'.$row["Matricule"].'</td>
    <td>'.$row["Nom_E"].'</td>
    <td>'.$row["Prenom_E"].'</td>
    <td>'.$row["DateEmbauche"].'</td>
    <td>'.$row["Actif"].'</td>
    <td>'.$row["id_F"].'</td>
    <td>'.$row["id_Se"].'</td>
    <td>'.'  <button type="submit"  class="btn btn-outline-success bi bi-pen" onclick="getId('.$row["Matricule"].')"  class="mo" name="mod"></button> <button type="submit" onclick="getId('.$row["Matricule"].')" value="delete"  name="supprimer" class="btn btn-outline-danger">Supprimer </button>'.'</td>
 </tr>';
   }
 
   }
   if(isset($_POST['show'])){
    $_SESSION['table']= $table;
  }
// --------------------------search-----------------------------
$bo1=true;
if (isset($_POST['submit'])) {
    $search1=$_POST['search1'];
    if(empty($search1)){
        $err='votre  champe est obligatoire ...  ';
        $bo1=false;
    }
    if($bo1){
      $sql="SELECT*FROM employes where Matricule='$search1'";
      $result1 = mysqli_query($conn, $sql);
        if(mysqli_num_rows( $result1)>0){
          while($row2 = mysqli_fetch_array($result1)) {
           $table2.='<tr>
            <td>'.$row2["Matricule"].'</td>
            <td>'.$row2["Nom_E"].'</td>
            <td>'.$row2["Prenom_E"].'</td>
            <td>'.$row2["DateEmbauche"].'</td>
            <td>'.$row2["Actif"].'</td>
            <td>'.$row2["id_F"].'</td>
            <td>'.$row2["id_Se"].'</td>
            <td>'.'<button class="btn btn-outline-success bi bi-pen "></button ><button class="btn btn-outline-danger "  > Supprimer</button>'.'</td>
         </tr>';
           }
        }
        else{
           
           
          $S='<span><b>Matricule Introuvable!</b></span>';

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
    <title>Employes</title>
      <link rel="stylesheet" href="css/styleAddUr.css">
    <style>
      td{
            border:1px solid black;
            text-align: center;
        }
        table {
  margin: 0px !important;
    border-collapse: collapse;
    width: 400px;
}
      .nouveau{
            background-color: #FFC71C;
            color: white;
        }
        .sur23{
          width: 290px;
          height: 38px;
          border-radius: 5px;
          margin-left:900px;
        }
        /* .mo {
         background-color: green;
        }*/
        .nn{
          width: 290px;
          height: 38px;
          font-size: 10pt;
        } 
         
        span{
          color: red;
          font-size: 20px;
          margin-bottom: 30px;
        }
    </style>
</head>
<body>
  <?php 
?>
<center>
  
    <form action="Employes.PHP" method="POST">
      <h1><b>Les Employes </b> </h1> <br>
     <!-- <input  class="btn btn-outline-primary"  value="add user"> -->
     <button class="btn btn-outline-primary" ><a href="button_Employes.php">Ajouter  Employes</a></button>
     <input type="submit"  name="show"class="btn btn-outline-warning m " value="Afficher">
     <!-- ----------------------------search -->
     <div class="input-group sur23">       
     <input type="search" class="form-control rounded nn" name="search1"
      placeholder="Recherche par matricule" aria-label="Search" aria-describedby="search-addon" />
     <input type="submit"  name="submit" class="btn btn-outline-warning" value="Recherche">
     </div> <br>
    <!-- ----------------------------search -->
    <div style=" max-height: 300px;" class="overflow-auto bg-light">
    <pre class="p-0">
    <table  id="dt-material-checkbox"  class="table table-light border-warning m-0" cellspacing="0">
    <tr>
    <td class="nouveau"><b>Matricule</b></td>
    <td class="nouveau" ><b>Nom</b></td>
    <td class="nouveau"><b>Prénom</b></td>
    <td class="nouveau "><b>Dated'Embauche</b></td>
    <td class="nouveau "><b>Actif</b></td>
    <td class="nouveau "><b>Fonction</b></td>
    <td class="nouveau "><b>Section</b></td>
    <td class="nouveau "><b>Options</b></td>
    </tr>
   <?php  echo $table2;  echo $S;
   if(isset($_SESSION['table'])) echo $_SESSION['table']; $_SESSION['table'] =''; ?>
    </table>
      </pre>
    </div>
  
    </form>
    </center>
    <script src="./functions.js"></script>
</body>
</html>