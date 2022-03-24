<?PHP
session_start();
if(!isset($_SESSION['inputno'])){
     header('location:login.php');
     exit();
}
?>