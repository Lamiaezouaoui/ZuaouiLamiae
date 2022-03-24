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
        margin-left: 150px;
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
        margin-left: 230px;
        border-radius: 7px;
        opacity:0.4;
        border:1px solid #75151E ;
        text-align: center;
    }
       
    </style>
</head>
<body>
<a class="bi bi-arrow-bar-left cc1 btn btn-primary mb-1 "  href="Section.php" >Section</a>
    
    <center>
        <fieldset>
    <form action="./Button_Section_action.php" method="POST">
    <p class="<?php if(isset($_SESSION['css'])) echo $_SESSION['css'];?>"><?php if(isset($_SESSION['valid'])) echo $_SESSION['valid'];?></p>
              <?php  $_SESSION['valid']=$_SESSION['css']='';?>
              
    <table>
        <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Code</label>
                <input type="text" name="code" class="form-control cc"
                 class="cc" id="formGroupExampleInput2" placeholder="Saisir votre Code">  
            <span><?php if(isset($_SESSION['E11'])) echo $_SESSION['E11'];?></span> 
            </td>  
        </tr>
        <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Section</label>
                <input type="text" name="sec" class="form-control cc"
                 class="cc" id="formGroupExampleInput2" placeholder="Saisir votre Section">  
            <span><?php if(isset($_SESSION['E22'])) echo $_SESSION['E22'];?></span> 
            </td>  
        </tr>
    <?php echo $_SESSION['E11']= $_SESSION['E22']='';?>
    </table>
    <input type="submit" name="add" value="Ajouter" class="btn btn-outline-success">
    </form>
    </fieldset>
   
    </center>
</body>
</html>