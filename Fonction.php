<?php
include 'config.php';
if(isset($_POST['add'])){
    header('location: Button_Fonction.php');
}
require_once 'topnav.php';
 $sql = "SELECT * FROM fonction";
 $table =$table2= '';
 $row = '';
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $table.='<tr>
    <td>'.$row["id_F"].'</td>
    <td>'.$row["Desc_F"].'</td>
 </tr>';
   }
 } 
 if(isset($_POST['show'])){
  $_SESSION['table']= $table;
} 
// --------------------------search-----------------------------KKK
$bo1=true;
if (isset($_POST['submit'])) {
    $search1=$_POST['search1'];
    if(empty($search1)){
        $err='votre  champe est obligatoire ...  ';
        $bo1=false;
    }
    if($bo1){
      $sql="SELECT*FROM fonction where id_F='$search1'";
    
      $result1 = mysqli_query($conn, $sql);
        if(mysqli_num_rows( $result1)>0){
          while($row2 = mysqli_fetch_array($result1)) {
           $table2.='<tr>
            <td>'.$row2["id_F"].'</td>
            <td>'.$row2["Desc_F"].'</td>
         </tr>';
           }
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
    <title>Fonction</title>
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
          margin-left: 900px;
          /* background-color: #FFC71C; */
        }
        .nn{
          width: 290px;
          height: 38px;
          font-size: 10pt;
        }
       
    </style>
</head>
<body>
  <?php 
?>
<center>
    <form action="./Fonction.php" method="POST">
      <h1> <b> liste des Fonctions </b> </h1>
      <input  class="btn btn-outline-primary" type="submit" name="add" value="Ajouter Fonction">
      <input type="submit"  name="show"class="btn btn-outline-warning m " value="Afficher">
     <!-- ----------------------------search -->
     <div class="input-group sur23">       
     <input type="search" class="form-control rounded nn" name="search1"
      placeholder="Recherche par Code" aria-label="Search" aria-describedby="search-addon" />
     <input type="submit"  name="submit" class="btn btn-outline-warning" value="Recherche">
     </div> <br>
      <!-- ----------------------------search -->
      <div style=" max-height: 300px;" class="overflow-auto bg-light">
    <pre class="p-0">
    <table  id="dt-material-checkbox"  class="table table-light border-warning m-0" cellspacing="0">
    <tr>
    <td class="nouveau"><b>Code</b></td>
    <td class="nouveau"><b>Description</b></td>
    </tr>
  
    <?php echo $table2;
    if(isset($_SESSION['table'])) echo $_SESSION['table']; $_SESSION['table'] =''; ?>
    </table>
    </pre>
    </form>
    </center>
</body>
</html>