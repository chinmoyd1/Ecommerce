<?php require_once("../resources/config.php");?>
<?php require_once("admin.php");?>
<html>
<head>
<title>Street Wear</title>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="../resources/css/tabcart.css" rel="stylesheet" type="text/css" media="screen">
 <link href="../resources/css/vids.css" rel="stylesheet" type="text/css" media="screen">
 <link href="../resources/css/styles.css" rel="stylesheet" type="text/css" media="screen">
 <link href="../resources/css/add.css" rel="stylesheet" type="text/css" media="screen">


<link type="text/css" rel="stylesheet" href="../jquerry/jquery.jblslider.css" />




<style>

input{padding-bottom: 20px;}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 84%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
	width:84%;
    background-color: #45a049;
}

 textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
   
    font-size: 16px;
    resize: none;
}
#r1 textarea {
    width: 100%;
    height: 300px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
   
    font-size: 16px;
    resize: none;
}

#r{float:left;width: 60%;padding-top: 10px;}
#r1{float:left;width: 60%;padding-top: 10px;}
#l{float:left;width: 20%;padding-left:4%;padding-top: 10px;}
h4{padding-left:35%;background-color: yellow;font-family:'Open Sans', sans-serif;font-weight:800px;position: absolute;top: 90px;left:200px;width:47%;}

</style>




</head>
<body>

<div id="nav0">

<div id="logo"><img src="../raw/images/tshirt.png" height="38px"><div id="txt">STREET WEAR</div></div>

<div id="nav1">
<ul>
  <li>
  <?php
   
  $admin=$_SESSION['admin'];
 
echo "<a href='index.php?username=$admin'>";





?>

  HOME</a>



  </li>
   <li>
  <?php
 $admin=$_SESSION['admin'];
  echo " <a class='active' href='mens.php?username=$admin'>";

?>
MENS</a></li>
 <li>
  <?php
 $admin=$_SESSION['admin'];
  echo " <a class='active' href='womens.php?username=$admin'>";


?>
WOMENS</a></li>
  <li style="float:right">
<?php
 $admin=$_SESSION['admin'];
  echo " <a class='active' href='login.php?username=$admin'>";

  	echo $_SESSION['admin'];
  ?>

  </a></li>
 </li>

  <li style="float:right">

  <?php
 $admin=$_SESSION['admin'];
  echo " <a class='active' href='checkout.php?username=$admin'>";



?>

  <img src="../raw/images/cart.png" height="10px">CART</a></li>
</ul>
</div>



</div>

<div id="vnav">
<ul>
  <li><a class="d" href="http://localhost/ecomm/public_html/order.php?orders">DASHBOARD</a></li>
  <li><a class="v" href="http://localhost/ecomm/public_html/order.php?view_products">VIEW PRODUCTS</a></li>
  <li><a class="a" href="http://localhost/ecomm/public_html/order.php?add_products">ADD PRODUCT</a></li>
  <li><a class="u" href="http://localhost/ecomm/public_html/order.php?users">USERS</a></li>
</ul>

</div>
<h4><?php display_message(); ?></h4>
<?php add_product(); ?>
<?php update_product();?>
<?php important();?>

</body>
</html>