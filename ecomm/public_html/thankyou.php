<?php require_once("../resources/config.php");?>
<html>
<head>
<title>Street Wear</title>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
 <link href="../resources/css/vids.css" rel="stylesheet" type="text/css" media="screen">
 <link href="../resources/css/styles.css" rel="stylesheet" type="text/css" media="screen">


<link type="text/css" rel="stylesheet" href="../jquerry/jquery.jblslider.css" />
<style>

#thanks{position: absolute;top:200px;left:200px;}
#thanks h2{font-family:'Open Sans', sans-serif;font-weight:800px;font-size:70px;}

</style>
</head>
<body>
<?php 

session_destroy();
?>

<div id="nav0">

<div id="logo"><img src="../raw/images/tshirt.png" height="38px"><div id="txt">STREET WEAR</div></div>

<div id="nav1">
<ul>
  <li><a href="index.php">HOME</a></li>
  <li><a class="active" href="mens.php">MENS</a></li>
  <li><a href="womens.php">WOMENS</a></li>
  <li style="float:right"><a href="login.php">SIGN IN</a></li>
  <li style="float:right"><a href="checkout.php">CART</a></li>
</ul>
</div>

<div id="cart" style="position: absolute;right:140px;top:38px;"><img src="../raw/images/cart.png" height="14px"></div>

</div>


<div id="thanks">

<h2>THANK YOU FOR SHOPPING </h2>
<h2 style="padding-left:310px;">WITH US</h2>


</div>










</body>
</html>