<?php 
session_start();
    include 'config.php';
    $b=true;
    $_SESSION['E30']='';
    $_SESSION['E31']='';
    $_SESSION['E32']='';
    $_SESSION['E33']='';
    $_SESSION['E34']='';
    $_SESSION['E35']='';
    $_SESSION['E36']='';
    $_SESSION['E37']='';
    $_SESSION['E38']='';
    if (isset($_POST['add'])){
        $matricule = $_POST['ma'];
        $nom = $_POST['nom'];
        $prenom = $_POST['pr'];
        $fonction = $_POST['fon'];
        $date = $_POST['date'];
        $annee = $_POST['annee'];
        $droit = $_POST['droit'];
        $pris = $_POST['pris'];
        $solde = $_POST['solde'];
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
    if(empty($fonction)){
        $_SESSION['E6']="Saisir votre fonction";
        $b=false;
    }
    if(empty($date)){
        $_SESSION['E4']="Saisir votre Date";
        $b=false;
    }
    if(empty($droit)){
        $_SESSION['E5']="Saisir votre droit";
        $b=false;
    }
    
    if(empty($section)){
        $_SESSION['E7']="Saisir votre section";
        $b=false;
    }
    if($b){
    $sql = "INSERT INTO employes (Matricule,Nom_E,Prenom_E,DateEmbauche,Actif,id_F,id_Se) values ('$matricule','$nom','$prenom' ,'$date', '$actif','$fonction','$section' )";
    if(!mysqli_query($conn, $sql)){
        echo 'Error' . mysqli_error($conn);
    }
}else{
    header('location:button_user.php');
}
}


// $lastId = mysqli_insert_id($conn);
// if($query ==true)
// {
   
//     $data = array(
//         'status'=>'true',
       
//     );

//     echo json_encode($data);
// }
// else
// {
//      $data = array(
//         'status'=>'false',
      
//     );

//     echo json_encode($data);
// } 

?>
