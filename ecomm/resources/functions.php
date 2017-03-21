<?php
//helper functions


function set_message($msg){

if(!empty($msg)) {

	$_SESSION['message'] = $msg;

} else {

$msg = "";

	   }

}

function display_message(){

	if(isset($_SESSION['message'])){

		echo $_SESSION['message'];
		unset($_SESSION['message']); 
	}

}




function redirect($location){
	header("Location: $location");
}

function query($sql){

	global $connection;
	return mysqli_query($connection, $sql);
}

function confirm($result){
	global $connection;
	if(!$result){
		die("QUERY FAILED". mysqli_error($connection));
		echo "failed";
	}
}

function escape_string($string){
	global $connection;
	return mysqli_real_escape_string($connection,$string);
}

function fetch_array($result){
 return mysqli_fetch_array($result);
}



//get products

function get_productsmen(){
	$query = query(" SELECT * FROM products WHERE product_category_id = 1");
	confirm($query);


if(isset($_GET['username'])){
  $admin=escape_string($_GET['username']) ;
while($row = fetch_array($query)){
		$product= <<<_END
      <div id="item" style="float:left">
      <a href="item.php?id={$row['product_id']}&username=$admin">
 	    <img src="{$row['product_image']}" height="350px">
 		<div id="name">{$row['product_title']}</div>
 		<div id="des">{$row['product_description']}<br />\${$row['product_price']}</div>
 		</a>
 		<div id="ico"><a href="cart.php?add={$row['product_id']}&username=$admin"><button class="button5">ADD TO CART</button></a></div>
 	  
  	    </div>
_END;
       
       echo $product;
	}

}


else{
	while($row = fetch_array($query)){
		$product= <<<_END
      <div id="item" style="float:left">
      <a href="item.php?id={$row['product_id']}">
 	    <img src="{$row['product_image']}" height="350px">
 		<div id="name">{$row['product_title']}</div>
 		<div id="des">{$row['product_description']}<br />\${$row['product_price']}</div>
 		</a>
 		<div id="ico"><a href="cart.php?add={$row['product_id']}"><button class="button5">ADD TO CART</button></a></div>
 	  
  	    </div>

_END;
       
       echo $product;
	}}
}

function get_productswomen(){
	$query = query(" SELECT * FROM products WHERE product_category_id = 2");
	confirm($query);



if(isset($_GET['username'])){
  $admin=escape_string($_GET['username']) ;
while($row = fetch_array($query)){
		$product= <<<_END
      <div id="item" style="float:left">
      <a href="item.php?id={$row['product_id']}&username=$admin">
 	    <img src="{$row['product_image']}" height="350px">
 		<div id="name">{$row['product_title']}</div>
 		<div id="des">{$row['product_description']}<br />\${$row['product_price']}</div>
 		</a>
 		<div id="ico"><a href="cart.php?add={$row['product_id']}&username=$admin"><button class="button5">ADD TO CART</button></a></div>
 	  
  	    </div>
_END;
       
       echo $product;
	}

}


else{
	while($row = fetch_array($query)){
		$product= <<<_END
      <div id="item" style="float:left">
      <a href="item.php?id={$row['product_id']}">
 	    <img src="{$row['product_image']}" height="350px">
 		<div id="name">{$row['product_title']}</div>
 		<div id="des">{$row['product_description']}<br />\${$row['product_price']}</div>
 		</a>
 		<div id="ico"><a href="cart.php?add={$row['product_id']}"><button class="button5">ADD TO CART</button></a></div>
 	  
  	    </div>

_END;
       
       echo $product;
	}}
}


function login_user(){

	if(isset($_POST['submit'])){
     
     $username = escape_string($_POST['username']);
	 $password = escape_string($_POST['password']);

	 $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'");
	 confirm($query);

   

	 if(mysqli_num_rows($query) == 0){

	 	set_message("Your Password or Username are Wrong");
	 	redirect("login.php");

	 }else{

	 while($row = fetch_array($query)){

	 	if ($row['user_level']==1) {
	 		redirect("admin.php?username=$username");
	 	}
	 	else{
	 		redirect("index.php?username=$username");
	 	}
	 	
	 }
	 }

	}
	

}

/*********************Add Products In Admin***********/


function add_product(){


	if(isset($_POST['publish'])) {

	$product_title = escape_string($_POST['product_title']);
	$product_category_id = escape_string($_POST['product_category_id']);
	$product_price = escape_string($_POST['product_price']);
	$product_description = escape_string($_POST['product_description']);
	$product_quantity = escape_string($_POST['product_quantity']);

 
$product_image = "http://localhost/ecomm/raw/images/men/".escape_string($_FILES['file']['name']);

if ($_FILES)
{
$name = "../raw/images/men/".$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], $name);
}


	//$product_image = escape_string($_FILES['file']['name']);

	//$image_temp_location = escape_string($_FILES['file']['tmp_name']);


	//move_uploaded_file($image_temp_location, UPLOAD_DIRECTORY. DS .$product_image);


	$query = query("INSERT INTO products(product_title,product_category_id,product_price,product_description,product_image,product_quantity) VALUES('{$product_title}','{$product_category_id}','{$product_price}','{$product_description}','{$product_image}','{$product_quantity}')");
	
	confirm($query);
	set_message("New Product Added");
	redirect("order.php?add_products");

	}


}


/*********************Edit Products In Admin***********/


function update_product(){


	if(isset($_POST['update'])) {

	$product_title = escape_string($_POST['product_title']);
	$product_category_id = escape_string($_POST['product_category_id']);
	$product_price = escape_string($_POST['product_price']);
	$product_description = escape_string($_POST['product_description']);
	$product_quantity = escape_string($_POST['product_quantity']);




if(empty(escape_string($_FILES['file']['name']))){

$get_pic = query("SELECT product_image FROM products WHERE product_id =".escape_string($_GET['id'])." ");
confirm($get_pic);

while($pic = fetch_array($get_pic)){

		$product_image = $pic['product_image'];

	}

}



else{
$product_image = "http://localhost/ecomm/raw/images/men/".escape_string($_FILES['file']['name']);}

if ($_FILES)
{
$name = "../raw/images/men/".$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], $name);
}


	//$product_image = escape_string($_FILES['file']['name']);

	//$image_temp_location = escape_string($_FILES['file']['tmp_name']);


	//move_uploaded_file($image_temp_location, UPLOAD_DIRECTORY. DS .$product_image);


	$query ="UPDATE products SET ";
	$query .="product_title='{$product_title}',";
	$query .="product_category_id='{$product_category_id}',";
	$query .="product_price='{$product_price}'  ,";
	$query .="product_description='{$product_description}',";
	$query .="product_image='{$product_image}',";
	$query .="product_quantity='{$product_quantity}'";
	$query .="WHERE product_id=" . escape_string($_GET['id']) . ";";
	
	$send_update_query = query($query);
	
	confirm($query);
	set_message("Product Updated");
	redirect("order.php?add_products");

	}


}



function signup(){

	if(isset($_POST['submit'])){
     
     $username = escape_string($_POST['username']);
     $email = escape_string($_POST['email']);
	 $password = escape_string($_POST['password']);

	$query = query("INSERT INTO users(username,email,password) VALUES('{$username}','{$email}','{$password}')");
	
	confirm($query);
	set_message("Registered");
	redirect("login.php");

	}

}


?>
