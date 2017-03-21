<?php require_once("../resources/config.php");?>
<html>
<head>
<title>Street Wear</title>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
 <link href="../resources/css/vids.css" rel="stylesheet" type="text/css" media="screen">
 <link href="../resources/css/styles.css" rel="stylesheet" type="text/css" media="screen">
 <link href="../resources/css/log.css" rel="stylesheet" type="text/css" media="screen">


<link type="text/css" rel="stylesheet" href="../jquerry/jquery.jblslider.css" />
<style>
#nav2{padding-left:250px;padding-right: 25px;background-color:#242424;padding-bottom: 18px}
#geek{position:absolute;top:100px;right:155px;}
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


<div id="login">
<h1><strong>Welcome.</strong> Please Sign Up!</h1>
<form  action="" method="post" enctype="multipart/form-data">
<fieldset>

<h2><?php display_message();?></h2>
	

<p><input type="text" name="username" required value="Enter Username" onBlur="if(this.value=='')this.value='Enter Username'" onFocus="if(this.value=='Enter Username')this.value='' "></p>
<p><input type="text" name="email" required value="Enter Email" onBlur="if(this.value=='')this.value='Enter Email'" onFocus="if(this.value=='Enter Email')this.value='' "></p>
<p><input type="password" name="password" required value="Enter Password" onBlur="if(this.value=='')this.value='Enter Password'" onFocus="if(this.value=='Enter Password')this.value='' "></p>
<p><input type="submit" name="submit" value="SIGN UP"></p>
</fieldset>
</form>

<!--<?php signup(); ?>-->







</div> <!-- end login -->


<div id="geek"><img src="../raw/images/geek.png" height="590px"></div>

</body>
</html>