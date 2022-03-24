<?php
 include 'topnav.php';

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <style>
   

form {
  
    margin: 20px;
    padding: 20px 0px;
    border-radius: 5px;
}
        span{
            color: red;
        }
        .cc{
        width: 700px;
        height:40px;
        }
        .cc1{
        margin-top: 20px;
        margin-left: 868px;
    } 
    .css{
        background-color: #4EE3B6;
        color: black;
        height: 40px;
        width: 700px;
        margin-left: 5px;
        border-radius: 7px;
        opacity:0.4;
        border:1px solid #059862 ;
        text-align: center;
    }
    .css1{
        background-color: #D32537;
        color: white;
        height: 40px;
        width: 700px;
        margin-left: 5px;
        border-radius: 7px;
        opacity:0.4;
        border:1px solid #75151E ;
        text-align: center;
        background-color: red;
    }
       
    </style>
</head>
<body>
<a class="bi bi-arrow-bar-left cc1 btn btn-primary mb-1 "  href="Demande.php" >Demande</a>
 
    <center>
        <fieldset>
    <form action="./Button_Demande_action.php" method="POST">
    <p class="<?php if(isset($_SESSION['css'])) echo $_SESSION['css'];?>"><?php if(isset($_SESSION['valid'])) echo $_SESSION['valid'];?></p>
              <?php  $_SESSION['valid']=$_SESSION['css']='';?>
              
    <table>
    <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Matricule</label>
                <input type="text" name="ma" class="form-control cc"
                 class="cc" id="formGroupExampleInput2" placeholder="saisir votre matricule">  
            <span><?php if(isset($_SESSION['E40'])) echo $_SESSION['E40'];?></span> 
            </td>
        </tr>
        <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Conges Pris</label>
                <input type="text" name="cg" class="form-control cc"
                 class="cc" id="formGroupExampleInput2" placeholder="saisir conges pris">  
            <span><?php if(isset($_SESSION['E41'])) echo $_SESSION['E41'];?></span> 
            </td>  
        </tr>   
        <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Date Départ</label>
                <input type="date" name="dd" class="form-control cc"
                 class="cc" id="formGroupExampleInput2" placeholder="saisir votre date depart">  
            <span><?php if(isset($_SESSION['E42'])) echo $_SESSION['E42'];?></span> 
            </td>  
        </tr>
        <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Date Reprise</label>
                <input type="date" name="dr" class="form-control cc"
                 class="cc" id="formGroupExampleInput2" placeholder="saisir votre date reprise">  
            <span><?php if(isset($_SESSION['E43'])) echo $_SESSION['E43'];?></span> 
            </td>  
        </tr>
    <?php echo $_SESSION['E40']= $_SESSION['E41']= $_SESSION['E42']= $_SESSION['E43']='';?>
    </table>
    <input type="submit" name="add" value="Ajouter" class="btn btn-outline-success">
    </form>
    </fieldset>
   
    </center>
</body>
</html>