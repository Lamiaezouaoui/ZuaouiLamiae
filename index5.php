<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>sidebar menu</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="boutstrap/style.css">
    <link rel="stylesheet" href="icons/bootstrap-icons-1.8.1/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style5.css">


</head>

<body>

    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Bootstrap Sidebar</h3>
            </div>

            <ul class="list-unstyled components">
                <p></p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Référentiel</a>
                </li>
                <li>
                    <a href="#">Section</a>
                    <a href="Employes.php">Employés</a>
                    <a href="#">Ancienneté congé</a>
                    <a href="#">Function </a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Référentiel</a>

                </li>
                <li>
                    <a href="#">Section</a>
                    <a href="#">Section</a>
                    <a href="#">Section</a>

                </li>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><i class="bi bi-chevron-bar-right"></i>ex: admin </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-house-door-fill"></i></a>
                                <!--Acceuille icons -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-person-circle"></i></a>
                                <!-- compt icons -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="bi bi-box-arrow-right" ></i></a>
                                <!-- exit icons -->
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>

        <script src="boutstrap/jquery.js"></script>
        <script src="boutstrap/bootstrap.min.js"></script>
        <!-- Bootstrap 4.1. JS -->

        <script src="boutstrap/popper.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });
            });
        </script>
</body>

</html>