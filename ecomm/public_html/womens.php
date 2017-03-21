<?php require_once("../resources/config.php");?>
<html>
<head>
<title>Street Wear</title>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
 <link href="../resources/css/vids.css" rel="stylesheet" type="text/css" media="screen">
 <link href="../resources/css/styles.css" rel="stylesheet" type="text/css" media="screen">


<link type="text/css" rel="stylesheet" href="../jquerry/jquery.jblslider.css" />
</head>
<body>

<div id="nav">

<div id="logo"><img src="../raw/images/tshirt.png" height="38px"><div id="txt">STREET WEAR</div></div>

<div id="nav1">
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


<div id="banner">
<main>

<div class="slider" id="jblslider">
<div class="slide" style="background-image: url('../raw/images/women/slide1.jpg');">
<div id="col" style="float:right;margin-top:20%;margin-right:10%;"><span class="caption"><a href="#">Biker <br/>Collection</a></span></div>
<a href="#"></a>
</div>
<div class="slide" style="background-image: url('../raw/images/women/slide2.jpg');">
<div id="col" style="float:right;margin-top:20%;margin-right:10%;"><span class="caption"><a href="#">Biker <br/>Collection</a></span></div>
<a href="#"></a>
</div>
<div class="slide" style="background-image: url('../raw/images/women/slide3.jpg');">
<div id="col" style="float:right;margin-top:20%;margin-right:10%;"><span class="caption"><a href="#">Biker <br/>Collection</a></span></div>
<a href="#"></a>
</div>
<div class="slide" style="background-image: url('../raw/images/women/slide4.jpg');">
<div id="col" style="float:right;margin-top:20%;margin-right:10%;"><span class="caption"><a href="#">Biker <br/>Collection</a></span></div>
<a href="#"></a>
</div>
<div class="slide" style="background-image: url('../raw/images/women/slide5.jpg');">
 <div id="col" style="float:right;margin-top:20%;margin-right:10%;"><span class="caption"><a href="#">Biker <br/>Collection</a></span></div>
<a href="#"></a>
</div>
</div><!--#slider -->

</main>
</div>
<script src="../jquerry/jquery-1.11.3.min.js"></script>
<script src="../jquerry/jquery.jblslider.js"></script>
<script>
$("#jblslider").jblSlider({
	animationType: 'fade',
	width: 1400,
	height: 600,
	safe_area: 640,
	duration: 1000,
	delay: 5000,
	resume: 20000
});
</script>


<div id="categories" class="maintext">

 	<?php get_productswomen(); ?>
 	  
  	   

 </div>


</body>
<script type="text/javascript">

$(window).scroll(function(){
  var thescroll = $('body').scrollTop();
  //alert(thescroll);
  //in here, get the scroll position, if it is greater than you navbar height then change the color or whatever.
  if (thescroll > 520) 
    {
      $("#nav").css({"background-color":"#242424"});
    }
    else
    {
      $("#nav").css({"background-color":"transparent"});
    }
});

</script>
<!-- InstanceEnd --></html>
