<?PHP  
 include 'topnav.php';
 include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherhe Livre</title>
    <link rel="stylesheet" href="css/searchsecitem.css"/>
</head>

<body>
        <fieldset class="wrapper">
            <form action="searchsecitem_action.php" method="POST">
                <h1 class="titleSerItem">Rechercher</h1>
                <hr>
                <div class="<?php echo @$_SESSION['ee'] ;?>"> <!--le message de reussit ou l'erreur ou de reussir -->
                    <?php echo @$_SESSION['erreur'] ;?>
                </div>
                
                <?php $_SESSION['erreur']=$_SESSION['ee'] ='';?>

                <table class="tablesearcheitem">
                    <tr>
                        <td class="labelsearcheitem">Critére</td>
                    
                        <td><select name="Critére" class="form-control">
                                <option value="LivreId">Code</option>
                                <option value="Titre">Titre</option>
                                <option value="Auteur">Auteur</option>
                                <option value="DateEdition">Date</option>>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="labelsearcheitem">Valeur</td>
                        <td><input type="text" name="valeur"  class="form-control" placeholder="Saisir la valeur "></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" name="Rechercher"  id="search" class="btn btn-primary" value="Rechercher">Rechercher</button>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>

    <script>
        $(document).ready(function() {
            // show the alert
            setTimeout(function() {
                $(".alert").alert('close');
            }, 3000);
        });
    </script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>