<?php require_once("../resources/config.php");?>
<?php
if(isset($_GET['username'])){
 $admin=escape_string($_GET['username']) ;
   
   $_SESSION['admin'] = $admin;

}

?>
<html>
<head>
<title>Street Wear</title>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
 <link href="../resources/css/vids.css" rel="stylesheet" type="text/css" media="screen">
 <link href="../resources/css/styles.css" rel="stylesheet" type="text/css" media="screen">

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



<div style="width:100%;height:100%; background-color:#424242;position: fixed;"
onmouseover="pauseVid(); pauseVid1();"></div>

<div id="myvid">

<a style="text-decoration: none;color:#F5F5F5;" href="mens.php">

<video id="myVideo" width="682" height="672" onmouseover="playVid(); pauseVid1();" loop muted>
  <source src="../raw/videos/MyVideo.mp4" type="video/mp4">

  Your browser does not support HTML5 video.
</video>

</a>
</div>

<a style="text-decoration: none;color:#F5F5F5;" href=womens.php>

<div id="myvid1" >
<video id="myVideo1" width="682" height="672" onmouseover="playVid1();pauseVid();" loop muted>
  <source src="../raw/videos/MyVideo1.mp4" type="video/mp4">

  Your browser does not support HTML5 video.
</video>

</a>
</div>
</div>


<div id="men"><a style="text-decoration: none;color:#F5F5F5;" href="mens.php">MENS</a></div>
<div id="women"><a style="text-decoration: none;color:#F5F5F5;" href=womens.php>WOMENS</a></div>

<script>
var vid = document.getElementById("myVideo");

function playVid() {
    vid.play();
}

function pauseVid() {
    vid.pause();
}
var vid1 = document.getElementById("myVideo1");

function playVid1() {
    vid1.play();
}

function pauseVid1() {
    vid1.pause();
}
</script>








</body>
</html>