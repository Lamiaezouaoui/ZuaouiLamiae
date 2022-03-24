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
       
    </style>
</head>
<body>
<a class="bi bi-arrow-bar-left cc1 btn btn-primary mb-1 "  href="Section.php" >Fonction</a>
 
    <center>
        <fieldset>
    <form action="./Button_Fonction_action.php" method="POST">
    <table>
    <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Code</label>
                <input type="text" name="code" class="form-control cc"
                 class="cc" id="formGroupExampleInput2" placeholder="Saisir votre Code">  
            <span><?php if(isset($_SESSION['E10'])) echo $_SESSION['E10'];?></span> 
            </td>
        </tr>
        <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Description</label>
                <input type="text" name="des" class="form-control cc"
                 class="cc" id="formGroupExampleInput2" placeholder="Saisir votre Description">  
            <span><?php if(isset($_SESSION['E20'])) echo $_SESSION['E20'];?></span> 
            </td>  
        </tr>   
    <?php echo $_SESSION['E10']= $_SESSION['E20']='';?>
    </table>
    <input type="submit" name="add" value="Ajouter" class="btn btn-outline-success">
    </form>
    </fieldset>
   
    </center>
</body>
</html>