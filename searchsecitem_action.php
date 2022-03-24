<?php
session_start();
include 'config.php';
$_SESSION['sp20']=$_SESSION['sp13']='';
   if(isset($_POST['Rechercher'])){
        $criter=$_POST['Critére'];
        $value=$_POST['valeur'];
        $var=true;
        if(empty($criter)){
          $_SESSION['sp20']='votre chomp ....';
          $var=false;
        }  
        if(empty($criter)){
          $_SESSION['sp13'].='votre chomp ....';
          $var=false;
        } 
        if ($var) {
          $sql = "SELECT *FROM LIVRE WHERE $criter='$value'";
          $varrusl=mysqli_query($conn, $sql);
          if(mysqli_num_rows($varrusl)>=1){
             $_SESSION['ee']='alert alert-success alert-dismissible';
             $_SESSION['erreur']="Le livre a été trouver avec succés";
            header("location:listsecitem.php");
            echo mysqli_error($conn);
          }else {
            $_SESSION['ee'] ='alert alert-danger';
            $_SESSION['erreur']="le livre n'est pas trouver ";
                header("location:searchsecitem.php");
              }
           
         } else{
    
            header("location:searchsecitem.php");
        }
      }
  
?>


<?php
/* session_start();
include 'config.php';
$_SESSION['sp20']=$_SESSION['sp13']='';
   if(isset($_POST['Rechercher'])){
        $criter=$_POST['Critére'];
        $value=$_POST['valeur'];
        $var=true;
        if(empty($criter)){
          $_SESSION['sp20']='votre chomp ....';
          $var=false;
        }  
        if(empty($criter)){
          $_SESSION['sp13'].='votre chomp ....';
          $var=false;
        } 
        if ($var) {
          $sql = "SELECT *FROM ETUDIANT WHERE $criter='$value'";
          $varrusl=mysqli_query($conn, $sql);
          if(mysqli_num_rows($varrusl)>=1){
             $_SESSION['ee']='alert alert-success alert-dismissible';
             $_SESSION['erreur']="l'étudiant a été trouver avec succés ";
            header("location:listeitem.php");
            echo mysqli_error($conn);
          }else {
            $_SESSION['ee'] ='alert alert-danger';
            $_SESSION['erreur']="l'étudiant n'est pas trouver ";
            header("location:searcheitem.php");
          }
           
         } else{
    
            header("location:searcheitem.php");
        }
      } */
  
?>