<?php 
session_start();
    include 'config.php';
    $b=true;
    $_SESSION['E10']='';
    $_SESSION['E20']='';
    if (isset($_POST['add'])){
        $code = $_POST['code'];
        $des = $_POST['des'];
    if(empty($code)){
        $_SESSION['E10']="Saisir votre code";
        $b=false;
    }
    if(empty($des)){
        $_SESSION['E20']="Saisir votre Descriptin";
        $b=false;
    }
    
    if($b){
    $sql = "INSERT INTO fonction (id_F,Desc_F) values ('$code','$des')";
    if(!mysqli_query($conn, $sql)){
        echo 'Error' . mysqli_error($conn);
    }
}else{
    header('location:Button_Fonction.php');
}
}
?>
