
<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
  <title></title>
  <style type="text/css">
    .btnAdd {
      text-align: right;
      width: 83%;
      margin-top: 30px;
      margin-bottom: 20px;
      margin-left: 50px;
    }
    .table2{
      padding-left:60px;
    }
    span{
      font-size: 15pt;
    }
    .table{
      margin-left: 20px;
    }
    .cs{
    width: 300px;
    height: 40px;
    margin: 12px 0px;
    border-radius: 6px;
    padding: 0px 7px;
    border-color: #CED4DA;
        }
        #btn{
        background-color:#FEC925 ;
        border: none;
        }
          </style>
</head>

<body>
<?PHP 
include 'topnav.php';
?>
  <div class="container-fluid">
    <h1 class="text-center">SECTION </h1>
    
    <div class="row">
      <div class="container">
        <div class="btnAdd">
          <!-- <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal" class="btn btn-success btn-sm">Add User</a> <br><br>
           <span>  search </span>  <input type="search" name="" id=""> -->
        </div>
        
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <table id="example" class="table">
              <thead>
                <th>Code</th>
                <th>Section</th>
                <tbody>
              </tbody>
                <tr>
                    <td>ADM</td>
                    <td>ADMINISTRATION</td>
                </tr>
                <tr>
                    <td>ATE</td>
                    <td>ATELIER</td>
                </tr>
                <tr>
                    <td>CHA</td>
                    <td>CHANTIER</td>
               </tr>    
               <tr>
                    <td>EL OUADIEN CONCASSEUR</td>
                    <td>CONCASSEUR</td>
                 </tr>
                 <tr>
                    <td>5</td>
                    <td>DEPOT</td>
                    </tr>
                    <tr>
                    <td>DEP</td>
                    <td>DEPOT</td>
                    </tr>
                    <tr>
                    <td>RN13</td>
                    <td>ROUTE NATIONAL</td>
                </tr>
              </thead>
            
            </table>
          </div>
          
        </div>
      </div>
    </div>
   </div>
   
  
  
</body>
</html>
<script type="text/javascript">
</script>
