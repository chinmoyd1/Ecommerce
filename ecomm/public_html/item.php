<?php require_once("../resources/config.php");?>
<html>
<head>
<title>Street Wear</title>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
 <link href="../resources/css/vids.css" rel="stylesheet" type="text/css" media="screen">
 <link href="../resources/css/styles.css" rel="stylesheet" type="text/css" media="screen">


<link type="text/css" rel="stylesheet" href="../jquerry/jquery.jblslider.css" />
<style>

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



<?php
    $query = query(" SELECT * FROM products WHERE product_id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)):
    
?>




<div id="zoom">
        <img src="<?php echo $row['product_image']?>" height="500px">
</div>
<div id="stuff" >
    <div id="topic"><?php echo $row['product_title']?></div>
    <div id="price">$<?php echo $row['product_price']?></div>
    <div id="description"><?php echo $row['product_description']?></div>
    <div id="lorem"><br/><br/><p>DESCRIPTION</p><br/>
    <p>Last year we fell in love with a family heirloom. Inspired by more than 40 years of patina, we retraced the original back to our neighbors at Golden Bear, who still had the hard pattern on file. We commissioned a recreation that should last for generations. Leave your children something to fight over.</p><br/><br/>

<p>MATERIAL</p><br/>

<p>Not only did Golden Bear have the original pattern, but also access to the same hide house. This year we’re stocking both Whisky brown and black. The choice is yours, but either way, you’re guaranteed to receive buttery soft leather that will only improve with time - just look at the original.</p>
</div>


<?php

if(isset($_GET['username'])){
  $admin=escape_string($_GET['username']) ;
$product= <<<_END
    <div id="ico1"><a href="cart.php?add={$row['product_id']}&username=$admin"><button class="button6">ADD TO CART</button></a></div>
_END;
echo $product;
}
else{
  $product= <<<_END
    <div id="ico1"><a href="cart.php?add={$row['product_id']}"><button class="button6">ADD TO CART</button></a></div>
_END;
echo $product;
}
?>

</div>
<?php endwhile;?>



</body>
</html>