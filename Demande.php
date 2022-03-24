<?php
include 'config.php';
if(isset($_POST['add'])){
    header('location: Button_Demande.php');
}
require_once 'topnav.php';
 $sql = "SELECT distinct * FROM Demande 
 inner join employes
 On employes.Matricule=demande.Matricule
 Inner join solde
 on solde.Matricule=employes.Matricule" ;
 $table =$table2=$S= '';
 $row = '';
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
//output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $table.='<tr>
    <td>'.$row["Num"].'</td>
    <td>'.$row["Matricule"].'</td>
    <td>'.$row["Nom_E"].'</td>
    <td>'.$row["Prenom_E"].'</td>
    <td>'.$row["id_F"].'</td>
    <td>'.$row["DateEmbauche"].'</td>
    <td>'.$row['droit_anne'].'</td>
    <td>'.$row["Droit"].'</td>
    <td>'.$row["deja_pris"].'</td>
    <td>'.$row["Total"].'</td>
    <td>'.$row["conges_pris"].'</td>
    <td>'.$row["Reste"].'</td>
    <td>'.$row["Date_depart"].'</td>
    <td>'.$row["date_fin"].'</td>
 </tr>'."<br>";
   }
 }  
 if(isset($_POST['show'])){
  $_SESSION['table']= $table;
}
 // --------------------------Search-----------------------------
$bo1=true;
if (isset($_POST['submit'])) {
    $search1=$_POST['search1'];
    if(empty($search1)){
        $err='votre  champe est oblgatoir ...  ';
        $bo1=false;
    }
    if($bo1){
      $sql="SELECT*FROM demande 
      inner join employes 
      on employes.Matricule=demande.Matricule
      where Matricule='$search1'";
      $result1 = mysqli_query($conn, $sql);
        if(mysqli_num_rows( $result1)>0){
          while($row2 = mysqli_fetch_array($result1)) {
           $table2.='<tr>
          <td>'.$row["Num"].'</td>
          <td>'.$row2["Matricule"].'</td>
          <td>'.$row2["Nom_E"].'</td>
          <td>'.$row2["Prenom_E"].'</td>
          <td>'.$row2["DateEmbauche"].'</td>
          <td>'.$row2["droit_anne"].'</td>
          <td>'.$row2["Droit"].'</td>
          <td>'.$row["deja_pris"].'</td>
          <td>'.$row["Total"].'</td>
          <td>'.$row["conges_pris"].'</td>
          <td>'.$row["Reste"].'</td>
          <td>'.$row["Date_depart"].'</td>
          <td>'.$row["date_fin"].'</td>
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
    <title>Demande</title>
    <style>
        td{
            border:1px solid #FAFAFA;
            text-align: center;
            background-color: #FDFDFE;
        }
        table {
  
             border-collapse: collapse;
             border: none;
        }
          .so{
            background-color: #FFC71C;
            color: white;
        }
        .nn{
          width: 290px;
          height: 38px;
          font-size: 10pt;
        } 
        .sur23{
          width: 280px;
          height: 38px;
          border-radius: 5px;
          margin-left:900px;
        }
    </style>
</head>
<body>
  <?php 
?>
<center>
      <form action="./Demande.php" method="POST">
      <h1> <b>Listes des Demandes </b> </h1>
      <button class="btn btn-outline-primary" ><a href="Button_Demande.php">Ajouter  Demande</a></button>
      <input type="submit"  name="show"class="btn btn-outline-warning m " value="Afficher">
           <!-- ----------------------------search -->
           <div class="input-group sur23"> 
       <input type="search" class="form-control rounded nn" name="search1"
       placeholder="Recherche par matricule" aria-label="Search" aria-describedby="search-addon" />
       <input type="submit"  name="submit" class="btn btn-outline-warning" value="Recherche">
       </div> <br>
    <table style="width:80%">
    <tr>
    <td class="so"><b>N°</b></td>
    <td class="so"><b>Matricule</b></td>
    <td class="so"><b>Nom</b></td>
    <td class="so"><b>Prenom</b></td>
    <td class="so"><b>Fonction</b></td>
    <td class="so"><b>Date d'Embauche</b></td>
    <td class="so"><b>Droit d'annee précédent</b></td>
    <td class="so"><b>Droit</b></td>
    <td class="so"><b>Déja Pris</b></td>
    <td class="so"><b>Total</b></td>
    <td class="so"><b>Conges pris</b></td>
    <td class="so"><b>Reste</b></td>
    <td class="so"><b>Date DeDépart</b></td>
    <td class="so"><b>Date De Reprise</b></td>
    </tr>

    <?php  echo $table2; echo $S;
   if(isset($_SESSION['table'])) echo $_SESSION['table']; $_SESSION['table'] =''; ?>
    </table>
      </pre>
    </form>
    </center>
</body>
</html>