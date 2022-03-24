<?php 
    include 'session.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>El HALLAOUI SARL</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="boutstrap/style.css">
    
    
    <link rel="stylesheet" href="icons/bootstrap-icons-1.8.1/bootstrap-icons.css"/>
    <link rel="stylesheet" href="css/navstyle.css">

    
 

    

</head>

<body>

        <nav class="navbar navbar-expand-lg bg-y">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <h1 class="logo"><span>EL HALLAOUI</span><span> SARL</span></h1>
                    <button class="btn d-inline-block d-lg-none ml-auto" type="button" 
                                            data-toggle="collapse" 
                                            data-target="#navbarSupportedContent" 
                                            aria-controls="navbarSupportedContent" 
                                            aria-expanded="false" 
                                            aria-label="Toggle navigation">
                        <i class="bi-list" style="color: #fff;" width="32" height="32"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                       
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#" title="Votre nom" style="opacity: .6;"><i class="bi bi-chevron-bar-right"></i><?php echo $_SESSION['inputno'];?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="index.php" title="Acceille"><i class="bi bi-house-door"></i></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link text-white" href="#" title="Mon Compte"><i class="bi bi-person-circle"></i></a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link text-white" href="logout.php" title="Deconnexio"><i class="bi bi-box-arrow-right" ></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="bg-y">
            <!-- <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
            </div> -->
            




            <ul class="list-unstyled components bg-y">
                <p><img src="./img/logo.png" alt=""   srcset="" style="height: 65px;"></p>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown hover2"><i class=""></i> &nbsp; Référentiel</a>
                        <li class="hover1">
                            <a href="Section.php" ><i class="bi bi-boxes" id="ho"></i> &nbsp; Section</a>
                        </li>
                        <li class="hover1">
                            <a href="Employes.php"><i class="bi bi-person-lines-fill" id="ho"></i> &nbsp; Employés</a>
                        </li>
                        <li class="hover1">
                            <a href="Ancienneté.php"><i class="bi bi-pencil" id="ho"></i> &nbsp; Ancienneté congé</a>
                        </li>
                        <li class="hover1">
                            <a href="Fonction.php"><i class="bi bi-briefcase-fill" id="ho"></i> &nbsp;Fonction</a>
                        </li>
                   
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown hover2" ><i class=""></i> &nbsp; Gestion de conges</a>
                    <li class="hover1">
                            <a href="Demande.php"><i class="bi bi-list-check" id="ho"></i> &nbsp; Demande</a>
                        </li>
                        <li class="hover1">
                            <a href="Solde.php"><i class="bi bi-trash" id="ho"></i> &nbsp; Solde</a>
                        </li>
                        
                       
                   
                </li>
                </ul>     
              
                    <br>
                    <br>
                    <br><br>
                <div style="text-align: center;">
               <p style="opacity: .3; font-size: 15px;">Gestion de Conges&copy;2022 Tout est bien servi</p>
                <p style="opacity: .2; font-size: 14px;">Développé par AmmineWissal & ZouaouiLamiae</p>
            </div>
            
        </nav>

        <!-- Page Content Holder -->
        <!-- <div id="content">

            
            
            <h2>Collapsible Sidebar Using Bootstrap 4</h2>
            <div class="appcontent">
                hhhhhhhhhhhhhhhhhhhh
            </div>
        </div> -->

    

    <script src="boutstrap/jquery.js"></script>
    <script src="boutstrap/bootstrap.min.js"></script>  <!-- Bootstrap 4.1. JS -->
  
    <script src="boutstrap/popper.min.js"></script>
    
    

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>