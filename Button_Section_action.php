<?php 
session_start();
    include 'config.php';
    $b=true;
    $_SESSION['E11']='';
    $_SESSION['E22']='';
    if (isset($_POST['add'])){
        $code = $_POST['code'];
        $sectin = $_POST['sec'];
    if(empty($code)){
        $_SESSION['E11']="Saisir votre code";
        $b=false;
    }
    if(empty($sectin)){
        $_SESSION['E22']="Saisir votre Section";
        $b=false;
    }
    
    if($b){
    $sql = "INSERT INTO section (id_Se,Section) values ('$code','$sectin')";
    if(mysqli_query($conn, $sql)){
        $_SESSION['css']="css";
        $_SESSION['valid'] = "Section a été bien ajouter.";
        header('location: Button_Section.php');
    }
    else{
        $_SESSION['css']="css1";
        $_SESSION['valid'] = "Section n'a pas été  ajouter.";
        header('location:Button_Section.php');
    }
    }
}

?>
