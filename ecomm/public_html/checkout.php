<?php require_once("../resources/config.php");?>
<?php require_once("cart.php");?>


<html>
<head>
<title>Street Wear</title>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
 <link href="../resources/css/vids.css" rel="stylesheet" type="text/css" media="screen">
 <link href="../resources/css/tabcart.css" rel="stylesheet" type="text/css" media="screen">
 <link href="../resources/css/styles.css" rel="stylesheet" type="text/css" media="screen">
<link href="../resources/css/imp.css" rel="stylesheet" type="text/css" media="screen">


<link type="text/css" rel="stylesheet" href="../jquerry/jquery.jblslider.css" />
<style>


.button9:hover  {
    background-color: #363636;
    color: white;
    
}

.button9{
    background-color: #555555;
    color: white;
    border: 2px solid #555555;
    padding:15px 200px ;
    border-radius: 5px;
    cursor: pointer;
}

#bnow{

    position:fixed;
    bottom: 5px;
  margin-left: 300px;

}
#hidden{

 
 visibility: hidden;
}
#nav2{padding-left:250px;padding-right: 25px;background-color:#242424;padding-bottom: 18px}

</style>
</head>
<body>

<div id="nav">

<div id="logo"><img src="../raw/images/tshirt.png" height="38px"><div id="txt">STREET WEAR</div></div>

<div id="nav2">
<ul>
  <li>

<?php
if(isset($_GET['username'])){
  $admin=escape_string($_GET['username']) ;
   
  
 
echo "<a href='index.php?username=$admin'>";

}

else{
 
echo "<a href='index.php'>";

}

?>
  
  HOME
  </a>


  </li>
  <li>
  <?php
if(isset($_GET['username'])){
  $admin=escape_string($_GET['username']) ;
  echo " <a class='active' href='mens.php?username=$admin'>";

}

else{
 
echo " <a class='active' href='mens.php'>";

}

?>

  MENS
  </a>


  </li>
 
<li>
  <?php
if(isset($_GET['username'])){
  $admin=escape_string($_GET['username']) ;
  echo " <a class='active' href='womens.php?username=$admin'>";

}

else{
 
echo " <a class='active' href='womens.php'>";

}

?>

  WOMENS
  </a>

  </li>
  <li style="float:right"><a href="logout.php">
<?php
if(isset($_GET['username'])){

  echo "LOG OUT";}
else{
  echo " ";
}

?>
  </a></li>
  <li style="float:right">

<?php
if(isset($_GET['username'])){
  $admin=escape_string($_GET['username']) ;
  echo " <a class='active' href='login.php?username=$admin'>";
  $_SESSION['admin'] = $admin;

   echo $_SESSION['admin'];

}

else{
   echo " <a class='active' href='login.php'>";
  echo "SIGN IN";
}

?>
  
</a></li>

  <li style="float:right">

  <?php
if(isset($_GET['username'])){
  $admin=escape_string($_GET['username']) ;
  echo " <a class='active' href='checkout.php?username=$admin'>";

}

else{
 
echo " <a class='active' href='checkout.php'>";

}

?>

  <img src="../raw/images/cart.png" height="10px"> CART

  </a>

  </li>


</ul>
</div>



</div>



<div id="main">








<h4><?php display_message();?></h4>





<h1>Shopping Cart</h1>
</div>
<div id="basket">
<table class="table0">
  <tr>
  
    <th width="8%">Product</th>
    <th width="8%">Price</th>
    <th width="8%">Quantity</th>
    <th width="8%">Subtotal</th>
    <th></th>
  </tr>
  


<?php cart(); 
?>



</table>
 </div>






<div id="total">
<h1>Cart Totals</h1>
<table class="table1"> 
  <tr>
    <th><b>Items:</b></th>
    <th>
    	<?php 
     echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0";
     ?>
    </th>
  </tr>
  <tr>
    <td><b>Shipping and Handling</b></td>
    <td>Free Shipping</td>
    
  </tr>
  <tr>
    <td><b>Order Total</b></td>
    <td>$
    <?php 
     echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";
     ?>
 </td>
  </tr>
</table>

</div>


</body>
</html>