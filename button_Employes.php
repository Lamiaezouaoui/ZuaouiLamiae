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
        span{
            color: red;
        }
        form {
    
    margin: 20px;
    padding: 20px 0px;
    border-radius: 5px;
}
       
.cc{
        width: 700px;
        height:40px;
        
   }
.cc1{
    margin-top: 20px;
    margin-left: 857px;

    }  
    .css1{
        background-color: red;
    }    
    .css{
        background-color: #4EE3B6;
        color: black;
        height: 40px;
        width: 700px;
        margin-left: 230px;
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
        background-color: red;
    }
    </style>
</head>




<body>
<a class="bi bi-arrow-bar-left cc1 btn btn-primary mb-1 "  href="Employes.php" >Employes</a>
    <center>
    <form action="Button_Employes_action.php" method="POST">
    <p class="<?php if(isset($_SESSION['css'])) echo $_SESSION['css'];?>"><?php if(isset($_SESSION['valid'])) echo $_SESSION['valid'];?></p>
              <?php  $_SESSION['valid']=$_SESSION['css']='';?>
              
    <table>
        <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Matricule</label>
                <input type="text" name="ma" class="form-control cc"
                 class="cc" id="formGroupExampleInput2" placeholder="Saisir Votre Matricule">  
            <span><?php if(isset($_SESSION['E1'])) echo $_SESSION['E1'];?></span> 
            </td>  
        </tr>
        <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Nom</label>
                <input type="text" name="nom" class="form-control"
                 class="cc" id="formGroupExampleInput2" placeholder="Saisir Votre Nom">  
            <span><?php if(isset($_SESSION['E2'])) echo $_SESSION['E2'];?></span> 
            </td>  
        </tr>
        <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Prenom</label>
                <input type="text" name="pr" class="form-control"
                 class="cc" id="formGroupExampleInput2" placeholder="Saisir Votre Prenom">  
            <span><?php if(isset($_SESSION['E3'])) echo $_SESSION['E3'];?></span> 
            </td>  
        </tr>  
        </tr>
            <tr>
            <td class="form-group"> 
                <label for="formGroupExampleInput2">Date d'Embauche</label>
                <input type="date" name="date" class="form-control"
                 class="cc" id="formGroupExampleInput2" placeholder="Another input"> 
            <span><?php if(isset($_SESSION['E4'])) echo $_SESSION['E4'];?></span> 
            </td>  
        </tr>
        <tr>
        <td>
                <form class="form-inline"    class="cc">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref" >Actif</label>
                    <select  name="actif" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        <option value="Actif">Actif</option>
                        <option value="sortant">sortant</option>
                    </select><br>
              <span><?php if(isset($_SESSION['E5'])) echo $_SESSION['E5'];?></span> 
                </td>
            </tr>
            <tr>
            <td>
            <form class="form-inline"   class="cc">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Fonction</label>
                    <select   name="fonction"class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        <option value="GESTIONNAIRE DE STOCK">GESTIONNAIRE DE STOCK</option>
                        <option value="ADJOINT CHEF D'USING">ADJOINT CHEF D'USING</option>
                        <option value="AGENT DE CONTROLE DE GESTION">AGENT DE CONTROLE DE GESTION </option>
                        <option value="AGENT DE SECURITE">AGENT DE SECURITE</option>
                        <option value="AID TOPOGRAPHE">AID TOPOGRAPHE</option>
                        <option value="AIDE COMPTABLE">AIDE COMPTABLE</option>
                        <option value="AIDE CONDUCTEUR DE TRAVAUX">AIDE CONDUCTEUR DE TRAVAUX</option>
                        <option value="AIDE DE LABORATOIRE">AIDE DE LABORATOIRE</option>
                        <option value="AIDE DE RESPONSABLE QUALITE">AIDE DE RESPONSABLE QUALITE</option>
                        <option value="AIDE GESTIONNAIRE DE STOCK">AIDE GESTIONNAIRE DE STOCK</option>
                        <option value="AIDE MAGASINIER">AIDE MAGASINIER</option>
                        <option value="AIDE MECANICIEN">AIDE MECANICIEN</option>
                        <option value="AIDE OP CENTRA">AIDE OP CENTRAL</option>
                        <option value="AIDE OP.CENTRALE A BETON">AIDE OP.CENTRALE A BETON</option>
                        <option value="AIDE OPERATEUR">AIDE OPERATEUR</option>
                        <option value="AIDE RESP EN MAINT">AIDE RESP EN MAINT</option>
                        <option value="AIDE TOPOGRAPHE">AIDE TOPOGRAPHE</option>
                        <option value="APPLICATEUR D ASPHALTE">APPLICATEUR D ASPHALTE</option>
                        <option value="APPLICATEUR D'ASPHALTE">APPLICATEUR D'ASPHALTE</option>
                        <option value="ASSISTANT DE DIRECTION">ASSISTANT DE DIRECTION</option>
                        <option value="ASSISTANT DE LABORATOIRE">ASSISTANT DE LABORATOIRE</option>
                        <option value="ASSISTANTE ADMINISTRATIVE">ASSISTANTE ADMINISTRATIVE</option>
                        <option value="ASSISTANTE ADMINISTRATIVE">ASSISTANTE ADMINISTRATIVE</option>
                        <option value="ASSISTANTE AU SERVICE  DES MARCHE">ASSISTANTE AU SERVICE  DES MARCHES </option>
                        <option value="BOISSEUR">BOISSEUR</option>
                        <option value="CHAUFFEUR">CHAUFFEUR</option>
                        <option value="CHAUFFEUR (TRACTEUR)">CHAUFFEUR (TRACTEUR)</option>
                        <option value="CHAUFFEUR CAMION">CHAUFFEUR CAMION</option>
                        <option value="CHAUFFEUR MALAXEUR">CHAUFFEUR MALAXEUR</option>
                        <option value="CHAUFFEUR NIVLEUS">CHAUFFEUR NIVLEUS</option>
                        <option value="CHAUFFEUR PERIME">CHAUFFEUR PERIME</option>
                        <option value="CHAUFFEUR REMORQUE">CHAUFFEUR REMORQUE</option>
                        <option value="CHAUFFEUR TRANSPORT">CHAUFFEUR TRANSPORT</option>
                        <option value="CHEF CHANTIER">CHEF CHANTIER</option>
                        <option value="CHEF CONCASSEUR">CHEF CONCASSEUR</option>
                        <option value="CHEF CUISINIER">CHEF CUISINIER</option>
                        <option value="CHEF D'EQUIPE">CHEF D'EQUIPE</option>
                        <option value="CHEF DE  S.CONCASS">CHEF DE  S.CONCASS</option>
                        <option value="CHEF DE CHANTIER">CHEF DE CHANTIER</option>
                        <option value="CHEF DE POSTE ">CHEF DE POSTE </option>
                        <option value="CHEF DE TABLE FINISSAGE ">CHEF DE TABLE FINISSAGE </option>
                        <option value="COMPTABLE">COMPTABLE</option>
                        <option value="CONDUCTEUR DE TRAV">CONDUCTEUR DE TRAV</option>
                        <option value="CONDUCTEUR DE TRAVAIL">CONDUCTEUR DE TRAVAIL</option>
                        <option value="COURSIER">COURSIER</option>
                        <option value="CUISINIER">CUISINIER</option>
                        <option value="DIRECTEUR DE CHANTIER">DIRECTEUR DE CHANTIER</option>
                        <option value="DIRECTEUR DES TRAVAUX">DIRECTEUR DES TRAVAUX</option>
                        <option value="ELECTRICIEN">ELECTRICIEN</option>
                        <option value="ELECTRICIEN AUTO">ELECTRICIEN AUTO</option>
                        <option value="ELECTRICIEN INDUST">ELECTRICIEN INDUST</option>
                        <option value="EMPLOYE">EMPLOYE</option>
                        <option value="EMPLOYEE">EMPLOYEE</option>
                        <option value="FEMME DE MENAGE">FEMME DE MENAGE</option>
                        <option value="GARDIEN">GARDIEN</option>
                        <option value="GARDIEN  RETRAITE">GARDIEN  RETRAITE</option>
                        <option value="GARDIEN RETRAITE300612">GARDIEN RETRAITE300612</option>
                        <option value="GERANT">GERANT</option>
                        <option value="GRAISSEUR">GRAISSEUR</option>
                        <option value="INGENIEUR">INGENIEUR</option>
                        <option value="INGENIEUR D'ETAT">INGENIEUR D'ETAT</option>
                        <option value="INGENIEUR EN INFORMATIQUE">INGENIEUR EN INFORMATIQUE</option>
                        <option value="INGENIEUR EN MAINTENANCE MECANIQUE">INGENIEUR EN MAINTENANCE MECANIQUE</option>
                        <option value="LARBI">LARBI</option>
                        <option value="LAVEUR DE VOITURES">LAVEUR DE VOITURES</option>
                        <option value="LAVEUR DES CAMIONS">LAVEUR DES CAMIONS</option>
                        <option value="MACON">MACON</option>
                        <option value="MAGASINIER">MAGASINIER</option>
                        <option value="MECANICIEN D'ENTRETIEN">MECANICIEN D'ENTRETIEN</option>
                        <option value="OP CENTRALE A BETON ">OP CENTRALE A BETON </option>
                        <option value="OP D'ENG (BULL D8)">OP D'ENG (BULL D8)</option>
                        <option value="OP D'ENG (BULL D9)">OP D'ENG (BULL D9)</option>
                        <option value="OP D'ENG (CHARGEUR)">OP D'ENG (CHARGEUR)</option>
                        <option value="OP D'ENG (COMPACTE">OP D'ENG (COMPACTE</option>
                        <option value="OP D'ENG (COMPACTEUR)">OP D'ENG (COMPACTEUR)</option>
                        <option value="OP D'ENG (FINISSEUR)">OP D'ENG (FINISSEUR)</option>
                        <option value="OP D'ENG (NIVELEUS)">OP D'ENG (NIVELEUS) </option>
                        <option value="OP D'ENG (PELLE)">OP D'ENG (PELLE)</option>
                        <option value="OP D'ENG (TRACTO PELLE) ">OP D'ENG (TRACTO PELLE) </option>
                        <option value="OP D'ENG BULL D8">OP D'ENG BULL D8</option>
                        <option value="OP D'ENG PELLE">OP D'ENG PELLE</option>
                        <option value="OP D'ENG TRACTOPELLE">OP D'ENG TRACTOPELLE</option>
                        <option value="OP D'ENGIN PELLE">OP D'ENGIN PELLE</option>
                        <option value="OP D'ENGIN TELESCOPE">OP D'ENGIN TELESCOPE</option>
                        <option value="OP D'ENGIN(COMPACTEUR)">OP D'ENGIN(COMPACTEUR)</option>
                        <option value="OP ENG (GRUTIER)">OP ENG (GRUTIER)</option>
                        <option value="OP ENG (PELLE)">OP ENG (PELLE)</option>
                        <option value="OP ENGIN CHARGEUR">OP ENGIN CHARGEUR</option>
                        <option value="OP ENGIN PELLE">OP ENGIN PELLE</option>
                        <option value="OP. D'ENGIN COMPACTEUR">OP. D'ENGIN COMPACTEUR</option>
                        <option value="OP.D'ENGIN CHARGEUR">OP.D'ENGIN CHARGEUR</option>
                        <option value="OPERATEUR CENTRALE">OPERATEUR CENTRALE</option>
                        <option value="OPERATEUR D'ENGIN (TRACTO-PELLE)">OPERATEUR D'ENGIN (TRACTO-PELLE)</option>
                        <option value="OPERATEUR D'ENGIN TELESCOP">OPERATEUR D'ENGIN TELESCOP</option>
                        <option value="OPERATEUR D'ENGIN TELESCOPE">OPERATEUR D'ENGIN TELESCOPE</option>
                        <option value="OPERATEUR REPONDEUSE">OPERATEUR REPONDEUSE</option>
                        <option value="OPÉRATEUR D'ENGIN ">OPÉRATEUR D'ENGIN </option>
                        <option value="OPÉRATEUR DE SAISIE">OPÉRATEUR DE SAISIE</option>
                        <option value="OUVRIER">OUVRIER</option>
                        <option value="OUVRIER MARCHÉ DE L'EAU">OUVRIER MARCHÉ DE L'EAU</option>
                        <option value="OUVRIER SPECIALISE">OUVRIER SPECIALISE</option>
                        <option value="PLOMBIER">PLOMBIER</option>
                        <option value="POINTEUR">POINTEUR</option>
                        <option value="POMPISTE">POMPISTE</option>
                        <option value="PORTE MERE">PORTE MERE</option>
                        <option value="REGLEUR">REGLEUR</option>
                        <option value="REGLEUR DE TABLE">REGLEUR DE TABLE</option>
                        <option value="REP ADM ET FIN">REP ADM ET FIN</option>
                        <option value="REPARATEUR DE PNEU">REPARATEUR DE PNEU</option>
                        <option value="REPARATEUR DES RAD">REPARATEUR DES RAD</option>
                        <option value="RES RESEAU ET INFORMATIQUE">RES RESEAU ET INFORMATIQUE</option>
                        <option value="RESP LOGISTIQUE ET">RESP LOGISTIQUE ET</option>
                        <option value="RESPONSABLE DE GESTION">RESPONSABLE DE GESTION</option>
                        <option value="RESPONSABLE DE QUALITE">RESPONSABLE DE QUALITE</option>
                        <option value="RESPONSABLE DE VENTE">RESPONSABLE DE VENTE</option>
                        <option value="RESPONSABLE DES ACHATS">RESPONSABLE DES ACHATS</option>
                        <option value="RESPONSABLE RH">RESPONSABLE RH</option>
                        <option value="RESPONSABLE TECHNICIEN QUALITE">RESPONSABLE TECHNICIEN QUALITE </option>
                        <option value="SECRETAIRE">SECRETAIRE</option>
                        <option value="SOUDEUR">SOUDEUR</option>
                        <option value="SPECIALISTE DU PNE">SPECIALISTE DU PNE</option>
                        <option value="T.GENIE CIVILE">T.GENIE CIVILE</option>
                        <option value="TECH METREUR">TECH METREUR</option>
                        <option value="TECHNICIEN">TECHNICIEN </option>
                        <option value="TECHNICIEN  DE QUALITE">TECHNICIEN  DE QUALITE</option>
                        <option value="TECHNICIEN CHARGE DE QUALITE">TECHNICIEN CHARGE DE QUALITE</option>
                        <option value="TECHNICIEN EN ELECTRO-MECANIQUE">TECHNICIEN EN ELECTRO-MECANIQUE</option>
                        <option value="TECHNICIEN EN FABRICATION MECANIQUE">TECHNICIEN EN FABRICATION MECANIQUE</option>
                        <option value="TECHNICIEN EN GROS ÎUVRES">TECHNICIEN EN GROS ÎUVRES</option>
                        <option value="TECHNICIEN EN INFORMATIQUE">TECHNICIEN EN INFORMATIQUE</option>
                        <option value="TECHNICIEN EN MAINTENANCE MECA">TECHNICIEN EN MAINTENANCE MECA</option>
                        <option value="TECHNICIEN EN REPARATION DES ENGINE">TECHNICIEN EN REPARATION DES ENGINE</option>
                        <option value="TECHNICIEN METREUR">TECHNICIEN METREUR</option>
                        <option value="TECHNICIEN TOPOGRAPHE">TECHNICIEN TOPOGRAPHE</option>
                        <option value="TOLIER">TOLIER</option>
                        <option value="TOPOGRAPHE">TOPOGRAPHE</option>
                        

                    </select>
                 <br><span><?php if(isset($_SESSION['E6'])){ echo $_SESSION['E6'];}?></span> 
            </td>  
        </tr>
        <tr>
            <td></td>
            </tr>
            <tr>
            <td>
            <form class="form-inline"   class="cc">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Section</label> 
                    <select  name="section" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Choose...</option>
                        <option value="ADMINISTRATION">ADMINISTRATION</option>
                        <option value="ATELIER">ATELIER</option>
                        <option value="CHANTIER">CHANTIER</option>
                        <option value="CONCASSEUR">CONCASSEUR</option>
                        <option value="DEPOT">DEPOT</option>
                        <option value="DEPOT">DEPOT</option>
                        <option value="ROUTE NATIONAL">ROUTE NATIONAL</option>
                    </select><br>
              <span><?php if(isset($_SESSION['E7'])){ echo $_SESSION['E7'];}?></span> 
            </td>  
        </tr> 
    </table><br>
    <input type="submit" name="add" value="Ajouter" class="btn btn-outline-success">
    <?php echo $_SESSION['E1']= $_SESSION['E2']=$_SESSION['E3']= $_SESSION['E4'] = $_SESSION['E5']= $_SESSION['E6']= $_SESSION['E7']='';?>
    </form>
    </center>
</body>
</html>