<?php 
session_start();
    include 'config.php';
    $b=true;
    $_SESSION['E40']='';
    $_SESSION['E41']='';
    $_SESSION['E42']='';
    $_SESSION['E43']='';
    if (isset($_POST['add'])){
        $matricule = $_POST['ma'];
        $conges = $_POST['cg'];
        $datedebut = $_POST['dd'];
        $datefin = $_POST['dr'];
    if(empty($matricule)){
        $_SESSION['E40']="Saisir votre matricule";
        $b=false;
    }
    if(empty($conges)){
        $_SESSION['E41']="Saisir votre conges";
        $b=false;
    }
    if(empty($datedebut)){
        $_SESSION['E42']="Saisir votre date debut";
        $b=false;
    }
    if(empty($datefin)){
        $_SESSION['E43']="Saisir votre date fin";
        $b=false;
    }
    if($b){
        $sql = "SELECT * FROM solde WHERE Matricule = '$matricule'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) >= 1) {
            while($row = mysqli_fetch_assoc($result)) {
                $anne = $row["Annee"];
              }
        } 
        $droitPre = 0;
        $datAjour=getdate();
        $yearAct = $datAjour["year"];
        $sql = "SELECT * FROM solde WHERE Matricule = '$matricule'";
        $result = mysqli_query($conn, $sql);
        // $yearAct +=1;
        if($yearAct>$anne){
            if (mysqli_num_rows($result) >= 1) {
                while($row = mysqli_fetch_assoc($result)) {
                    $droitPre = $row["Solde"];
                  }
            }
           
        }else{
            $droitPre = 0;
        }
     
        $sql = "INSERT INTO demande (Matricule,conges_pris,Date_depart,Date_fin,droit_anne) values ('$matricule','$conges','$datedebut','$datefin','$droitPre')";
        if(mysqli_query($conn, $sql)){
            $num = mysqli_insert_id($conn);
            $_SESSION['css']="css";
            $_SESSION['valid'] = "La demande a été bien ajouter.";
            header('location: Button_Demande.php');
      
        //Create a date object out of a string (e.g. from a database):
        $sql = "SELECT * FROM employes WHERE Matricule = '$matricule'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) >= 1) {
            while($row = mysqli_fetch_assoc($result)) {
                $datte = $row["DateEmbauche"];
              }
              
        }
        $date1 = date_create_from_format('Y-m-d', '2000-01-01');
        $dateAmb =date_create_from_format('Y-m-d', $datte); 
        $array = array(
        (int)$dateAmb->format('Y'),
        (int)$dateAmb->format('m'),
        (int)$dateAmb->format('d'),
        );
        //Create a date object out of today's date:
        $date2 = date_create_from_format('Y-m-d', date('Y-m-d'));
        $diff2 = (array) date_diff($date2, $dateAmb);
        $diff1 = (array) date_diff($date2, $date1);
        if($yearAct != $array[0]){
            $droit = (($diff1['m']+1) * 1.5 +$droitPre);
        }
        if(intval($yearAct) == $array[0]) {
            $droit = (($diff2['m']+1) * 1.5 +$droitPre);
        }
        
        
        $sum = 0;
        $sql = "SELECT * FROM solde WHERE Matricule = '$matricule'";
            $result1 = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result1) == 1 and $yearAct==$anne) {
                $sql = "SELECT * FROM demande WHERE Matricule = '$matricule'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) >= 1) {
                while($row = mysqli_fetch_assoc($result)) {
                    $sum += $row["conges_pris"];
                  }
                  
            }
                $soldU = $droit - $sum;
                $numPre = $num - 1;
                $dejaPris = 0;
                $sql2 = "UPDATE solde SET Pris ='$sum' , Solde = '$soldU' Where Matricule = '$matricule'";
                if(mysqli_query($conn, $sql2)){
                    $sql = "SELECT * FROM demande WHERE Matricule = '$matricule' ";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) >=1) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $dejaPris += $row["conges_pris"];
                              }
                        
                    }else{
                        $dejaPris = 0;
                    }
                    $dejaPris-= $conges;
                    $total = $droit - $dejaPris;
                    $reste = $total - $conges;
                    $sql2 = "UPDATE demande SET deja_pris ='$dejaPris' , Total = '$total',Reste = '$reste' Where Matricule = '$matricule'  And Num ='$num'";
                if(mysqli_query($conn, $sql2)){
                    echo $array[0] .' '. $yearAct .'   '. $anne .' '. (($diff1['m']+1) * 1.5) ;
                }
            }
            }else{
        
        $soldi = $droit - $conges;
        
        $sql2 = "INSERT INTO solde (Matricule,Annee,Droit,Pris,Solde) values ('$matricule','$yearAct','$droit' ,'$conges', '$soldi')";
        if(mysqli_query($conn, $sql2)){
            $sql = "SELECT * FROM demande WHERE Matricule = '$matricule'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) == 1) {
                $dejaPris = 0;
            }else{
                $dejaPris = $conges;
                while($row = mysqli_fetch_assoc($result)) {
                    $dejaPris += $row["conges_pris"];
                  }
            }
            
            $total = $droit - $dejaPris;
            $reste = $total - $conges;
            $sql2 = "UPDATE demande SET deja_pris ='$dejaPris' , Total = '$total',Reste = '$reste' Where Matricule = '$matricule'  And Num ='$num'";
        if(mysqli_query($conn, $sql2)){
            header('location:Button_Demande.php');
        }
    }
    }
}

else{
    $_SESSION['css']="css1";
    $_SESSION['valid'] = "La demande n'a pas été  ajouter.";
    header('location:Button_Demande.php');
}
}else{
    echo 'Error' . mysqli_error($conn);
}
}
?>