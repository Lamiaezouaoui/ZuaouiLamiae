<?php 
 session_start();
    include 'config.php';
    $b=true;
    $_SESSION['E1']='';
    $_SESSION['E2']='';
    $_SESSION['E3']='';
    $_SESSION['E4']='';
    $_SESSION['E5']='';
    $_SESSION['E6']='';
    $_SESSION['E7']='';
    if (isset($_POST['add'])){
        $matricule = $_POST['ma'];
        $nom = $_POST['nom'];
        $prenom = $_POST['pr'];
        $date = $_POST['date'];
        $actif = $_POST['actif'];
        $fonction = $_POST['fonction'];
        $section = $_POST['section'];
    if(empty($matricule)){
        $_SESSION['E1']="Saisir votre matricule";
        $b=false;
    }
    if(empty($nom)){
        $_SESSION['E2']="Saisir votre nom";
        $b=false;
    }
    
    if(empty($prenom)){
        $_SESSION['E3']="Saisir votre prenom";
        $b=false;
    }
    if(empty($date)){
        $_SESSION['E4']="Saisir votre Date";
        $b=false;
    }
    if(empty($actif)){
        $_SESSION['E5']="Saisir votre actif";
        $b=false;
    }
    if(empty($fonction)){
        $_SESSION['E6']="Saisir votre fonction";
        $b=false;
    }
    if(empty($section)){
        $_SESSION['E7']="Saisir votre section";
        $b=false;
    }
    if($b){
    $sql = "INSERT INTO employes (Matricule,Nom_E,Prenom_E,DateEmbauche,Actif,id_F,id_Se) values ('$matricule','$nom','$prenom' ,'$date', '$actif','$fonction','$section' )";
    if(mysqli_query($conn, $sql)){
        $_SESSION['css']="css";
        $_SESSION['valid'] = "l'employes a été bien ajouter.";
        header('location: button_Employes.php');
    }
    else{
        $_SESSION['css']="css1";
        $_SESSION['valid'] = "l'employes n'a pas été  ajouter.";
        header('location:button_Employes.php');
    }
    }}
?>
