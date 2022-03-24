<?php
include 'config.php';
require_once 'topnav.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction</title>
    <link rel="stylesheet" href="css/styleAddUr.css">
    <style>
      td{
            border:1px solid black;
            text-align: center;
        }
        table {
          margin: 0px !important;
          border-collapse: collapse;
          max-width: 700px !important;
        }
        .nouveau{
            background-color: #FFC71C;
            color: white;
        }
        .sur23{
          width: 290px;
          height: 38px;
          border-radius: 5px;
          margin-left: 900px;
          /* background-color: #FFC71C; */
        }
        .nn{
          width: 290px;
          height: 38px;
          font-size: 10pt;
        }
       
    </style>
</head>
<body>
  <?php 
?>
<center>
    <form action="./Ancienneté.php" method="POST">
      <h1> <b> listes des Anciennetés-Congés </b> </h1>
      <div style=" max-height: 300px;" class="overflow-auto bg-light">
    <pre class="p-0">
    <table  id="dt-material-checkbox"  class="table table-light border-warning m-0" cellspacing="0">
    <tr>
    <td class="nouveau"><b>Borne inferieure</b></td>
    <td class="nouveau"><b>Borne Superieure</b></td>
    <td class="nouveau"><b>Taux</b></td>
    </tr>
    <tr>
      <td>0</td>
      <td>5</td>
      <td>1.5</td>
    </tr>
    <tr>
      <td>5</td>
      <td>10</td>
      <td>3</td>
    </tr>
    <tr>
      <td>10</td>
      <td>15</td>
      <td>4.5</td>
    </tr>
    <tr>
      <td>15</td>
      <td>20</td>
      <td>6</td>
    </tr>
    <tr>
      <td>20</td>
      <td>25</td>
      <td>7.5</td>
    </tr>
    <tr>
      <td>25</td>
      <td>30</td>
      <td>9</td>
    </tr>
    <tr>
      <td>30</td>
      <td>35</td>
      <td>10.5</td>
    </tr>
    <tr>
      <td>35</td>
      <td>40</td>
      <td>12</td>
    </tr>
    </table>
    </pre>
    </form>
    </center>
</body>
</html>