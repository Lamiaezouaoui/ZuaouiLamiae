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
        .btn{
            background-color:yellowgreen;
        }
       
    </style>
</head>
<body>
    <center>
        <fieldset>
    <form action="./Button_Solde_action.php" method="POST">
    <table>
        <tr>Matricule


            <td> Matricule </td>
           </tr>
           <tr>
            <td> 
                <input type="text" name="ma"  class="cc"> <br>
            <span><?php if(isset($_SESSION['E30'])) echo $_SESSION['E30'];?></span> 
            </td>
        </tr>
        <tr>
            <td> Nom </td>
           </tr>
           
              <tr>
            <td> 
                <input type="text" name="nm" class="cc" ><br>
            <span><?php if(isset($_SESSION['E31'])) echo $_SESSION['E31'];?></span> 
            </td>  
        </tr>
        <tr>
            <td> Prenom </td>
           </tr>
           <tr>
            <td> 
                <input type="text" name="pr"  class="cc"> <br>
            <span><?php if(isset($_SESSION['E32'])) echo $_SESSION['E32'];?></span> 
            </td>
        </tr>
        <tr>
            <td> Fonction </td>
           </tr>
           <tr>
            <td> 
                <input type="text" name="fon"  class="cc"> <br>
            <span><?php if(isset($_SESSION['E33'])) echo $_SESSION['E33'];?></span> 
            </td>
        </tr>
        <tr>
            <td> Date d'Embauche </td>
           </tr>
           <tr>
            <td> 
                <input type="text" name="date"  class="cc"> <br>
            <span><?php if(isset($_SESSION['E34'])) echo $_SESSION['E34'];?></span> 
            </td>
        </tr>
        <tr>
            <td> Annee </td>
           </tr>
           <tr>
            <td> 
                <input type="text" name="annee"  class="cc"> <br>
            <span><?php if(isset($_SESSION['E35'])) echo $_SESSION['E35'];?></span> 
            </td>
        </tr>


        <tr>
            <td> Droit </td>
           </tr>
           <tr>
            <td> 
                <input type="text" name="droit"  class="cc"> <br>
            <span><?php if(isset($_SESSION['E36'])) echo $_SESSION['E36'];?></span> 
            </td>
        </tr>
        <tr>
            <td> Pris </td>
           </tr>
           <tr>
            <td> 
                <input type="text" name="pris"  class="cc"> <br>
            <span><?php if(isset($_SESSION['E37'])) echo $_SESSION['E37'];?></span> 
            </td>
        </tr>
        <tr>
            <td> Solde </td>
           </tr>
           <tr>
            <td> 
                <input type="text" name="solde"  class="cc"> <br>
            <span><?php if(isset($_SESSION['E38'])) echo $_SESSION['E38'];?></span> 
            </td>
        </tr>
        
    <?php echo $_SESSION['E30']= $_SESSION['E31']= $_SESSION['E32']= $_SESSION['E33']= $_SESSION['E34']= $_SESSION['E35']= $_SESSION['E36']= $_SESSION['E37']= $_SESSION['E38']='';?>
    </table>
    <input type="submit" name="add" value="ajouter" class="btn">
    </form>
    </fieldset>
   
    </center>
</body>
</html>