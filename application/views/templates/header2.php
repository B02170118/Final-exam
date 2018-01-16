<!DOCTYPE html>
<?php
if (empty($_SESSION['Login'])){
  echo "沒有權限";
  setTimeout("location.href='<?php echo base_url() . './home';?>'",3000);
  header('Location:login.php');
  die();
}?>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >汽車購物網</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url() . 'home';?>">首頁</a></li>
      <li><a href="<?php echo base_url() . 'home';?>/products">商店</a></li>
	   <li><a href="<?php echo base_url() . 'home';?>/about">關於</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url() . 'home';?>/logout"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
    </ul>
  </div>
</nav>
