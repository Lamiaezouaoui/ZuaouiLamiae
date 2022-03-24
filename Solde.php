<?php
include 'config.php';
// if(isset($_POST['add'])){
//     header('location: Button_Fonction.php');
// }
require_once 'topnav.php';
 $sql = "SELECT * FROM solde 
 inner join employes
 On employes.Matricule=solde.Matricule" ;
 $table = '';
 $row = '';
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
//output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $_SESSION['check1'] = '';
    $_SESSION['check2'] = '';
    $_SESSION['check3'] = '';
    $_SESSION['check4'] = '';
    $_SESSION['check5'] = '';
    $_SESSION['check6'] = '';
    $_SESSION['check7'] = '';
    $_SESSION['check8'] = '';
    $_SESSION['check9'] = '';
    $_SESSION['check10'] = '';
    $_SESSION['check11'] = '';
    $_SESSION['check12'] = '';
    $dateEmB =$row["DateEmbauche"];
    $DateEmbauche =date_create_from_format('Y-m-d', $dateEmB); 
    $array = array(
    (int)$DateEmbauche->format('Y'),
    (int)$DateEmbauche->format('m'),
    (int)$DateEmbauche->format('d'),
    );
    $droit='';
    $idSolde='';
    $dateAujourd  = getdate();
    $anneAct = $dateAujourd['year'];
    $anneEmb = $array[0];
    $moisAct = $dateAujourd['month'];
    $moisEmb = $array[1];
    $date2 = date_create_from_format('Y-m-d',date('Y-m-d'));
    $diff = (array) date_diff($date2, $DateEmbauche);
    $droit = $row['Droit'];
    $idSolde = $row['id_Solde'];
   if($diff['y']>=5){
     $droit+=1.5;
     $sql = "UPDATE solde SET Droit= '$droit' where id_Solde='$idSolde'";
     mysqli_query($conn,$sql);
   }
    
    if($anneAct!=$anneEmb){
      if($moisAct=="January") {
        $_SESSION['check1'] = 'checked';
       }
       if($moisAct=="February ") {
        $_SESSION['check1'] = 'checked';
        $_SESSION['check2'] = 'checked';
       }
       if($moisAct=="March") {
        $_SESSION['check1'] = 'checked';
        $_SESSION['check2'] = 'checked';
        $_SESSION['check3'] = 'checked';
       }
       if($moisAct=="April") {
        $_SESSION['check1'] = 'checked';
        $_SESSION['check2'] = 'checked';
        $_SESSION['check3'] = 'checked';
        $_SESSION['check4'] = 'checked';
       }
       if($moisAct=="May") {
        $_SESSION['check1'] = 'checked';
        $_SESSION['check2'] = 'checked';
        $_SESSION['check3'] = 'checked';
        $_SESSION['check4'] = 'checked';
        $_SESSION['check5'] = 'checked';
       }
       if($moisAct=="June") {
        $_SESSION['check1'] = 'checked';
        $_SESSION['check2'] = 'checked';
        $_SESSION['check3'] = 'checked';
        $_SESSION['check4'] = 'checked';
        $_SESSION['check5'] = 'checked';
        $_SESSION['check6'] = 'checked';
       }
       if($moisAct=="July") {
        $_SESSION['check1'] = 'checked';
        $_SESSION['check2'] = 'checked';
        $_SESSION['check3'] = 'checked';
        $_SESSION['check4'] = 'checked';
        $_SESSION['check5'] = 'checked';
        $_SESSION['check6'] = 'checked';
        $_SESSION['check7'] = 'checked';
       }
       if($moisAct=="August") {
        $_SESSION['check1'] = 'checked';
        $_SESSION['check2'] = 'checked';
        $_SESSION['check3'] = 'checked';
        $_SESSION['check4'] = 'checked';
        $_SESSION['check5'] = 'checked';
        $_SESSION['check6'] = 'checked';
        $_SESSION['check7'] = 'checked';
        $_SESSION['check8'] = 'checked';
       }
       if($moisAct=="September") {
        $_SESSION['check1'] = 'checked';
        $_SESSION['check2'] = 'checked';
        $_SESSION['check3'] = 'checked';
        $_SESSION['check4'] = 'checked';
        $_SESSION['check5'] = 'checked';
        $_SESSION['check6'] = 'checked';
        $_SESSION['check7'] = 'checked';
        $_SESSION['check8'] = 'checked';
        $_SESSION['check9'] = 'checked';
       }
       if($moisAct=="October") {
        $_SESSION['check1'] = 'checked';
        $_SESSION['check2'] = 'checked';
        $_SESSION['check3'] = 'checked';
        $_SESSION['check4'] = 'checked';
        $_SESSION['check5'] = 'checked';
        $_SESSION['check6'] = 'checked';
        $_SESSION['check7'] = 'checked';
        $_SESSION['check8'] = 'checked';
        $_SESSION['check9'] = 'checked';
        $_SESSION['check10'] = 'checked';
       }
       if($moisAct=="November") {
        $_SESSION['check1'] = 'checked';
        $_SESSION['check2'] = 'checked';
        $_SESSION['check3'] = 'checked';
        $_SESSION['check4'] = 'checked';
        $_SESSION['check5'] = 'checked';
        $_SESSION['check6'] = 'checked';
        $_SESSION['check7'] = 'checked';
        $_SESSION['check8'] = 'checked';
        $_SESSION['check9'] = 'checked';
        $_SESSION['check10'] = 'checked';
        $_SESSION['check11'] = 'checked';
       }
       if($moisAct=="December") {
        $_SESSION['check1'] = 'checked';
        $_SESSION['check2'] = 'checked';
        $_SESSION['check3'] = 'checked';
        $_SESSION['check4'] = 'checked';
        $_SESSION['check5'] = 'checked';
        $_SESSION['check6'] = 'checked';
        $_SESSION['check7'] = 'checked';
        $_SESSION['check8'] = 'checked';
        $_SESSION['check9'] = 'checked';
        $_SESSION['check10'] = 'checked';
        $_SESSION['check11'] = 'checked';
        $_SESSION['check12'] = 'checked';
       }
    }
    if($anneAct==$anneEmb){
      // if($moisAct=='January' && $moisEmb==01){
      // $_SESSION['check1'] = 'checked';
      // }
      // if($moisAct=='February' && $moisEmb==01){
      // $_SESSION['check1'] = 'checked';
      // $_SESSION['check2'] = 'checked';
      // }
      // if($moisAct=='February' && $moisEmb==02){
      // $_SESSION['check2'] = 'checked';
       
      // }
      // if($moisAct=='March' && $moisEmb==01){
      // $_SESSION['check1'] = 'checked';
      // $_SESSION['check2'] = 'checked';
      // $_SESSION['check3'] = 'checked';
      //  }
      // if($moisAct=='March' && $moisEmb==02){
      // $_SESSION['check2'] = 'checked';
      // $_SESSION['check3'] = 'checked';
      // }
      // if($moisAct=='March' && $moisEmb==03){
      // $_SESSION['check3'] = 'checked';
      // }
      // if($moisAct=='April' && $moisEmb==01){
      // $_SESSION['check1'] = 'checked';
      // $_SESSION['check2'] = 'checked';
      // $_SESSION['check3'] = 'checked';
      // $_SESSION['check4'] = 'checked';
      // }
      // if($moisAct=='April' && $moisEmb==02){
      // $_SESSION['check2'] = 'checked';
      // $_SESSION['check3'] = 'checked';
      // $_SESSION['check4'] = 'checked';
      // }
      // if($moisAct=='April' && $moisEmb==03){
      // $_SESSION['check3'] = 'checked';
      // $_SESSION['check4'] = 'checked';
      // }
      // if($moisAct=='April' && $moisEmb==04){
      // $_SESSION['check4'] = 'checked';
      //  }
      //  if($moisAct=='May' && $moisEmb==01){
      //   $_SESSION['check1'] = 'checked';
      //   $_SESSION['check2'] = 'checked';
      //   $_SESSION['check3'] = 'checked';
      //   $_SESSION['check4'] = 'checked';
      //   $_SESSION['check5'] = 'checked';
      // }
      // if($moisAct=='May' && $moisEmb==02){
      // $_SESSION['check2'] = 'checked';
      // $_SESSION['check3'] = 'checked';
      // $_SESSION['check4'] = 'checked';
      // $_SESSION['check5'] = 'checked';
      // }
      // if($moisAct=='May' && $moisEmb==03){
      // $_SESSION['check3'] = 'checked';
      // $_SESSION['check4'] = 'checked';
      // $_SESSION['check5'] = 'checked';
      //  }
      switch(true){
        case $moisAct=='January' && $moisEmb==01:
          $_SESSION['check1'] = 'checked';
          break;
        case $moisAct=='February' && $moisEmb==01:
          $_SESSION['check1'] = 'checked';
          $_SESSION['check2'] = 'checked';
          break;
        case $moisAct=='February' && $moisEmb==02:
          $_SESSION['check2'] = 'checked';
          break;
        case $moisAct=='March' && $moisEmb==01:
          $_SESSION['check1'] = 'checked';
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          break;
        case $moisAct=='March' && $moisEmb==02:
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          break;
        case $moisAct=='March' && $moisEmb==03:
          $_SESSION['check3'] = 'checked';
          break;
        case $moisAct=='April' && $moisEmb==01:
          $_SESSION['check1'] = 'checked';
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          break;
        case $moisAct=='April' && $moisEmb==02:
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          break;
        case $moisAct=='April' && $moisEmb==03:
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          break; 
        case $moisAct=='April' && $moisEmb==04:
          $_SESSION['check4'] = 'checked';
          break;  
        case $moisAct=='May' && $moisEmb==01:
          $_SESSION['check1'] = 'checked';
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          break; 
       case $moisAct=='May' && $moisEmb==02:
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          break; 
        case $moisAct=='May' && $moisEmb==03:
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          break; 
        case $moisAct=='May' && $moisEmb==04:
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          break; 
        case $moisAct=='May' && $moisEmb==05:
          $_SESSION['check5'] = 'checked';
          break; 
        case $moisAct=='June' && $moisEmb==01:
          $_SESSION['check1'] = 'checked';
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          break; 
        case $moisAct=='June' && $moisEmb==02:
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          break;
        case $moisAct=='June' && $moisEmb==03:
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          break;
        case $moisAct=='June' && $moisEmb==04:
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
        break;
        case $moisAct=='June' && $moisEmb==05:
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
        break;
        case $moisAct=='June' && $moisEmb==06:
          $_SESSION['check6'] = 'checked';
          break;
        case $moisAct=='July' && $moisEmb==01:
          $_SESSION['check1'] = 'checked';
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          break; 
        case $moisAct=='July' && $moisEmb==02:
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          break; 
        case $moisAct=='July' && $moisEmb==03:
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          break; 
        case $moisAct=='July' && $moisEmb==04:
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          break; 
        case $moisAct=='July' && $moisEmb==05:
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          break;
        case $moisAct=='July' && $moisEmb==06:
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          break;
        case $moisAct=='July' && $moisEmb==06:
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          break;
        case $moisAct=='July' && $moisEmb==07:
          $_SESSION['check7'] = 'checked';
          break;
        case $moisAct=='August' && $moisEmb==01:
          $_SESSION['check1'] = 'checked';
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          break; 
        case $moisAct=='August' && $moisEmb==02:
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          break; 
        case $moisAct=='August' && $moisEmb==03:
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          break; 
        case $moisAct=='August' && $moisEmb==04:
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          break; 
        case $moisAct=='August' && $moisEmb==05:
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          break; 
        case $moisAct=='August' && $moisEmb==06:
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          break;
        case $moisAct=='August' && $moisEmb==07:
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          break;
        case $moisAct=='August' && $moisEmb==8:
          $_SESSION['check8'] = 'checked';
          break;
        case $moisAct=='September' && $moisEmb==01:
          $_SESSION['check1'] = 'checked';
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          break;
        case $moisAct=='September' && $moisEmb==02:
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          break;
        case $moisAct=='September' && $moisEmb==03:
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          break;
        case $moisAct=='September' && $moisEmb==04:
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          break;
        case $moisAct=='September' && $moisEmb==05:
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          break;
        case $moisAct=='September' && $moisEmb==06:
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          break;
        case $moisAct=='September' && $moisEmb==07:
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          break;
        case $moisAct=='September' && $moisEmb==8:
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          break;
        case $moisAct=='September' && $moisEmb==9:
          $_SESSION['check9'] = 'checked';
          break;
        case $moisAct=='October' && $moisEmb==01:
          $_SESSION['check1'] = 'checked';
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          break;
        case $moisAct=='October' && $moisEmb==02:
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          break;
        case $moisAct=='October' && $moisEmb==03:
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          break;
        case $moisAct=='October' && $moisEmb==04:
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          break;
        case $moisAct=='October' && $moisEmb==05:
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          break;
        case $moisAct=='October' && $moisEmb==06:
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          break;
        case $moisAct=='October' && $moisEmb==07:
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          break;
        case $moisAct=='October' && $moisEmb==8:
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          break;
        case $moisAct=='October' && $moisEmb==9:
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          break;
        case $moisAct=='October' && $moisEmb==10:
          $_SESSION['check10'] = 'checked';
          break;
        case $moisAct=='November' && $moisEmb==01:
          $_SESSION['check1'] = 'checked';
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          break;
        case $moisAct=='November' && $moisEmb==02:
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          break;
        case $moisAct=='November' && $moisEmb==03:
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          break;
        case $moisAct=='November' && $moisEmb==04:
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          break;
        case $moisAct=='November' && $moisEmb==05:
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          break;
        case $moisAct=='November' && $moisEmb==06:
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          break;
        case $moisAct=='November' && $moisEmb==07:
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          break;
        case $moisAct=='November' && $moisEmb==8:
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          break;
        case $moisAct=='November' && $moisEmb==9:
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          break;
        case $moisAct=='November' && $moisEmb==10:
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          break;
        case $moisAct=='November' && $moisEmb==11:
          $_SESSION['check11'] = 'checked';
          break;
        case $moisAct=='December' && $moisEmb==01:
          $_SESSION['check1'] = 'checked';
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          $_SESSION['check12'] = 'checked';
          break;
        case $moisAct=='December' && $moisEmb==02:
          $_SESSION['check2'] = 'checked';
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          $_SESSION['check12'] = 'checked';
          break;
        case $moisAct=='December' && $moisEmb==03:
          $_SESSION['check3'] = 'checked';
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          $_SESSION['check12'] = 'checked';
          break;
        case $moisAct=='December' && $moisEmb==04:
          $_SESSION['check4'] = 'checked';
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          $_SESSION['check12'] = 'checked';
          break;
        case $moisAct=='December' && $moisEmb==05:
          $_SESSION['check5'] = 'checked';
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          $_SESSION['check12'] = 'checked';
          break;
        case $moisAct=='December' && $moisEmb==06:
          $_SESSION['check6'] = 'checked';
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          $_SESSION['check12'] = 'checked';
          break;
        case $moisAct=='December' && $moisEmb==07:
          $_SESSION['check7'] = 'checked';
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          $_SESSION['check12'] = 'checked';
          break;
        case $moisAct=='December' && $moisEmb==8:
          $_SESSION['check8'] = 'checked';
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          $_SESSION['check12'] = 'checked';
          break;
        case $moisAct=='December' && $moisEmb==9:
          $_SESSION['check9'] = 'checked';
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          $_SESSION['check12'] = 'checked';
          break;
        case $moisAct=='December' && $moisEmb==10:
          $_SESSION['check10'] = 'checked';
          $_SESSION['check11'] = 'checked';
          $_SESSION['check12'] = 'checked';
          break;
        case $moisAct=='December' && $moisEmb==11:
          $_SESSION['check11'] = 'checked';
          $_SESSION['check12'] = 'checked';
          break;
        case $moisAct=='December' && $moisEmb==12:
          $_SESSION['check12'] = 'checked';
          break;
          }
      }
    $table.='<tr>
    <td>'.$row["Matricule"].'</td>
    <td>'.$row["Nom_E"].'</td>
    <td>'.$row["Prenom_E"].'</td>
    <td>'.$row["id_F"].'</td>
    <td>'.$row["DateEmbauche"].'</td>
    <td>'.$row["Annee"].'</td>
    <td>'.$row["Droit"].'</td>
    <td>'.$row["Pris"].'</td>
    <td>'.$row["Solde"].'</td>
    <td>'.'<input  value="m1" name="m[]" ' . $_SESSION["check1"] . ' type="checkbox">'.'</td>
    <td>'.'<input  value="m2" name="m[]" ' . $_SESSION["check2"] . ' type="checkbox">'.'</td>
    <td>'.'<input  value="m3" name="m[]"' .  $_SESSION["check3"] . ' type="checkbox">'.'</td>
    <td>'.'<input  value="m4" name="m[]" ' . $_SESSION["check4"] . ' type="checkbox">'.'</td>
    <td>'.'<input  value="m5" name="m[]" ' . $_SESSION["check5"] . ' type="checkbox">'.'</td>
    <td>'.'<input  value="m6" name="m[]" ' . $_SESSION["check6"] . ' type="checkbox">'.'</td>
    <td>'.'<input  value="m7" name="m[]" ' . $_SESSION["check7"] . ' type="checkbox">'.'</td>
    <td>'.'<input  value="m8"  name="m[]" ' . $_SESSION["check8"] . ' type="checkbox">'.'</td>
    <td>'.'<input  value="m9"  name="m[]" ' . $_SESSION["check9"] . ' type="checkbox">'.'</td>
    <td>'.'<input  value="m10" name="m[]"' . $_SESSION["check10"] . ' type="checkbox">'.'</td>
    <td>'.'<input  value="m11" name="m[]" ' . $_SESSION["check11"] . ' type="checkbox">'.'</td>
    <td>'.'<input  value="m12" name="m[]" ' . $_SESSION["check12"] . ' type="checkbox">'.'</td>
 </tr>';
   }
 } 
 if(isset($_POST['show'])){
  $_SESSION['table']= $table;
}
// --------------------------search-----------------------------
$b=true;
$table2=$S= $err='';
if (isset($_POST['Recherche'])) {
  $search1=$_POST['search1'];
  if(empty($search)){
      $err='votre champe est obligatoire ...  ';
      $b=false;
  }
      $sql="SELECT*FROM solde
      inner join employes 
      on employes.Matricule =solde.Matricule
      where Matricule='$search1'";
      $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows( $result)>0){
          while($row2 = mysqli_fetch_array($result)) {
           $table2.='<tr>
           <td>'.$row2["Matricule"].'</td>
           <td>'.$row2["Nom_E"].'</td>
           <td>'.$row2["Prenom_E"].'</td>
           <td>'.$row2["id_F"].'</td>
           <td>'.$row2["DateEmbauche"].'</td>
           <td>'.$row2["Annee"].'</td>
           <td>'.$row2["Droit"].'</td>
           <td>'.$row2["Pris"].'</td>
           <td>'.$row2["Solde"].'</td>
           <td>'.'<input  value="m1" name="m[]" '. $_SESSION["check1"] .' type="checkbox">'.'</td>
           <td>'.'<input  value="m2" name="m[]" '. $_SESSION["check2"] .' type="checkbox">'.'</td>
           <td>'.'<input  value="m3" name="m[]"'.  $_SESSION["check3"] .' type="checkbox">'.'</td>
           <td>'.'<input  value="m4" name="m[]" '. $_SESSION["check4"] .'type="checkbox">'.'</td>
           <td>'.'<input  value="m5" name="m[]" '. $_SESSION["check5"] .'type="checkbox">'.'</td>
           <td>'.'<input  value="m6" name="m[]" '. $_SESSION["check6"] .'type="checkbox">'.'</td>
           <td>'.'<input  value="m7" name="m[]" '. $_SESSION["check7"] .'type="checkbox">'.'</td>
           <td>'.'<input  value="m8"  name="m[]" '. $_SESSION["check8"] .' type="checkbox">'.'</td>
           <td>'.'<input  value="m9"  name="m[]" '. $_SESSION["check9"] .' type="checkbox">'.'</td>
           <td>'.'<input  value="m10" name="m[]"'. $_SESSION["check10"] .' type="checkbox">'.'</td>
           <td>'.'<input  value="m11" name="m[]" '. $_SESSION["check11"] .'type="checkbox">'.'</td>
           <td>'.'<input  value="m12" name="m[]" '. $_SESSION["check12"] .'type="checkbox">'.'</td>
         </tr>';
           }
        }
        else{
          $S.='<span><b>Matricule Introuvable!</b></span>';
        }
    }
// --------------------------search-----------------------------
// $bo1=true;
// $table2=$S= $err='';
// if (isset($_POST['button'])) {
//   $search1=$_POST['search1'];
//   if(empty($search1)){
//       $err='votre  champe est obligatoire ...  ';
//       $bo1=false;
//   }
//   if($bo1){
//     $sql="SELECT*FROM solde
//     inner join employes 
//     on employes.Matricule=solde.Matricule
//     where Matricule='$search1'";
//     $result4 = mysqli_query($conn, $sql);
//       if(mysqli_num_rows($result4)>=1){
//         while($row2 = mysqli_fetch_array($result4)) {
//           echo 
//          $table2.='<tr>
//          <td>'.$row2["Matricule"].'</td>
//          <td>'.$row2["Nom_E"].'</td>
//          <td>'.$row2["Prenom_E"].'</td>
//          <td>'.$row2["id_F"].'</td>
//          <td>'.$row2["DateEmbauche"].'</td>
//          <td>'.$row2["Annee"].'</td>
//          <td>'.$row2["Droit"].'</td>
//          <td>'.$row2["Pris"].'</td>
//          <td>'.$row2["Solde"].'</td>
//          <td>'.'<input  value="m1" name="m[]" '. $_SESSION["check1"] .' type="checkbox">'.'</td>
//          <td>'.'<input  value="m2" name="m[]" '. $_SESSION["check2"] .' type="checkbox">'.'</td>
//          <td>'.'<input  value="m3" name="m[]"'.  $_SESSION["check3"] .' type="checkbox">'.'</td>
//          <td>'.'<input  value="m4" name="m[]" '. $_SESSION["check4"] .'type="checkbox">'.'</td>
//          <td>'.'<input  value="m5" name="m[]" '. $_SESSION["check5"] .'type="checkbox">'.'</td>
//          <td>'.'<input  value="m6" name="m[]" '. $_SESSION["check6"] .'type="checkbox">'.'</td>
//          <td>'.'<input  value="m7" name="m[]" '. $_SESSION["check7"] .'type="checkbox">'.'</td>
//          <td>'.'<input  value="m8"  name="m[]" '. $_SESSION["check8"] .' type="checkbox">'.'</td>
//          <td>'.'<input  value="m9"  name="m[]" '. $_SESSION["check9"] .' type="checkbox">'.'</td>
//          <td>'.'<input  value="m10" name="m[]"'. $_SESSION["check10"] .' type="checkbox">'.'</td>
//          <td>'.'<input  value="m11" name="m[]" '. $_SESSION["check11"] .'type="checkbox">'.'</td>
//          <td>'.'<input  value="m12" name="m[]" '. $_SESSION["check12"] .'type="checkbox">'.'</td>
//        </tr>';
//          }
//       }
//     }
//       else{
//         $S='<span><b>Matricule Introuvable!</b></span>';
//       }
//   }
$b=true;
$table3=$A= $err='';
if (isset($_POST['submit'])) {
  $search=$_POST['search'];
  if(empty($search)){
      $err='votre champe est obligatoire ...  ';
      $b=false;
  }
      $sql1="SELECT*FROM solde
      inner join employes 
      on employes.Matricule =solde.Matricule
      where Annee='$search'";
      $result2 = mysqli_query($conn, $sql1);
        if(mysqli_num_rows( $result2)>0){
          while($row3 = mysqli_fetch_array($result2)) {
           $table3.='<tr>
           <td>'.$row3["Matricule"].'</td>
           <td>'.$row3["Nom_E"].'</td>
           <td>'.$row3["Prenom_E"].'</td>
           <td>'.$row3["id_F"].'</td>
           <td>'.$row3["DateEmbauche"].'</td>
           <td>'.$row3["Annee"].'</td>
           <td>'.$row3["Droit"].'</td>
           <td>'.$row3["Pris"].'</td>
           <td>'.$row3["Solde"].'</td>
           <td>'.'<input  value="m1" name="m[]" '. $_SESSION["check1"] .' type="checkbox">'.'</td>
           <td>'.'<input  value="m2" name="m[]" '. $_SESSION["check2"] .' type="checkbox">'.'</td>
           <td>'.'<input  value="m3" name="m[]"'.  $_SESSION["check3"] .' type="checkbox">'.'</td>
           <td>'.'<input  value="m4" name="m[]" '. $_SESSION["check4"] .'type="checkbox">'.'</td>
           <td>'.'<input  value="m5" name="m[]" '. $_SESSION["check5"] .'type="checkbox">'.'</td>
           <td>'.'<input  value="m6" name="m[]" '. $_SESSION["check6"] .'type="checkbox">'.'</td>
           <td>'.'<input  value="m7" name="m[]" '. $_SESSION["check7"] .'type="checkbox">'.'</td>
           <td>'.'<input  value="m8"  name="m[]" '. $_SESSION["check8"] .' type="checkbox">'.'</td>
           <td>'.'<input  value="m9"  name="m[]" '. $_SESSION["check9"] .' type="checkbox">'.'</td>
           <td>'.'<input  value="m10" name="m[]"'. $_SESSION["check10"] .' type="checkbox">'.'</td>
           <td>'.'<input  value="m11" name="m[]" '. $_SESSION["check11"] .'type="checkbox">'.'</td>
           <td>'.'<input  value="m12" name="m[]" '. $_SESSION["check12"] .'type="checkbox">'.'</td>
         </tr>';
           }
        }
        else{
          $A.='<span><b>Annee Introuvable!</b></span>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solde</title>
    <style>
      td{
            border:1px solid #FAFAFA;
            text-align: center;
            background-color: #FDFDFE;
        }
        table {
 
    border-collapse: collapse;
    width: 50px;
}
.so{
            background-color: #FFC71C;
            color: white;
        }
        .sur23{
          width: 290px;
          height: 38px;
          border-radius: 5px;
          margin-left:900px;
        }
        
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
    <form action="./Solde.php" method="POST">
      <h1> <b>Listes des Soldes </b> </h1>
     <!-- <input  class="btn btn-outline-primary"  value="add user"> -->
     <!-- <button class="btn btn-outline-primary" ><a href="button_Employes.php">add user</a></button> -->
     <input type="submit"  name="show"class="btn btn-outline-warning m " value="Afficher">
     <!-- ----------------------------search Matricule -->
     <div class="input-group sur23">       
     <input type="search" class="form-control rounded nn" name="search1"
      placeholder="Recherche par matricule" aria-label="Search" aria-describedby="search-addon" <?php  echo $err; ?> />
     <input type="submit"  name="Recherche" class="btn btn-outline-warning" value="Recherche">
     </div> <br>
    <!-- ----------------------------search -->
     <!-- ----------------------------search Annee-->
     <div class="input-group sur23">       
     <input type="search" class="form-control rounded nn" name="search"
      placeholder="Recherche par Annee" aria-label="Search" aria-describedby="search-addon" <?php  echo $err; ?> />
     <input type="submit"  name="submit" class="btn btn-outline-warning" value="Recherche">
     </div> <br>
    <!-- ----------------------------search -->
    <div style=" max-height: 300px;">
    <pre >
    <table style="width:100%">
    <tr>
    <td class="so"><b>Matricule</b></td>
    <td class="so"><b>Nom</b></td>
    <td class="so"><b>Prenom</b></td>
    <td class="so"><b>Fonction</b></td>
    <td class="so"><b>Date d'Embauche</b></td>
    <td class="so"><b>Annee</b></td>
    <td class="so"><b>Droit</b></td>
    <td class="so"><b>Pris</b></td>
    <td class="so"><b>Solde</b></td>
    <td class="so"><b>M1</b></td>
    <td class="so"><b>M2</b></td>
    <td class="so"><b>M3</b></td>
    <td class="so"><b>M4</b></td>
    <td class="so"><b>M5</b></td>
    <td class="so"><b>M6</b></td>
    <td class="so"><b>M7</b></td>
    <td class="so"><b>M8</b></td>
    <td class="so"><b>M9</b></td>
    <td class="so"><b>M10</b></td>
    <td class="so"><b>M11</b></td>
    <td class="so"><b>M12</b></td>
    </tr>
    <?php  echo $table2;  echo $A; echo $S; echo $table3;
   if(isset($_SESSION['table'])) echo $_SESSION['table']; $_SESSION['table'] =''; ?>
    </table>
      </pre>
    </form>
    </center>
</body>
</html>