<?php require_once("../resources/config.php");?>

<?php

if(isset($_GET['username'])){
 $admin=escape_string($_GET['username']) ;
$user_level=0;
$query = query("SELECT user_level FROM users WHERE username ='".$admin."';");
confirm($query);
while($quer = fetch_array($query)){

    $user_level = $quer['user_level'];

  }
if($user_level)
{ 
  $_SESSION['admin'] = $admin;
   redirect("order.php?orders");
 }
else{
  set_message("Not Authorized");
  redirect("login.php?username=$admin");
}
   
  

}




function important(){


if(isset($_GET['orders'])){






	$product= <<<_END

		<div id = "content">

<h1>All Orders</h1>


<table class="tablex" style="width:90%">
  <tr>
  
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 50px; border-bottom:2px solid #C7C7C7;" >Order Id</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 50px; border-bottom:2px solid #C7C7C7;" >Ordered By</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 150px; border-bottom:2px solid #C7C7C7;">Order Name</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 15px; border-bottom:2px solid #C7C7C7;">Order Items</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 10px; border-bottom:2px solid #C7C7C7;">Order Amount</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 10px; border-bottom:2px solid #C7C7C7;"></th>
   
  </tr>
_END;
echo $product;


$query = query(" SELECT * FROM orders");
	confirm($query);

	while($row = fetch_array($query)){

	
$product1= <<<_YO

  <tr>
  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">{$row['order_id']}</td>
  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">{$row['ordered_by']}</td>
  <td style="font-size:12px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">{$row['order_name']}</td>
  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">{$row['order_items']}</td>
  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">\${$row['order_amount']}</td>


  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;"><a href="delete_order.php?id={$row['order_id']}"><img src="../raw/images/multiply.png" width="35px" style="cursor:pointer;"></a></td>
  </tr>





_YO;
echo $product1;
 }      
       
	
}

if(isset($_GET['view_products'])){




$product= <<<_END

		<div id = "content">

<h1>Products</h1>

<table class="tablex";>
  <tr>
  	<th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 10px; border-bottom:2px solid #C7C7C7; border-right:2px solid #C7C7C7;">Product Id</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 50px; border-bottom:2px solid #C7C7C7; border-right:2px solid #C7C7C7;" >Product</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 150px; border-bottom:2px solid #C7C7C7; border-right:2px solid #C7C7C7;">Product Name</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 10px; border-bottom:2px solid #C7C7C7; border-right:2px solid #C7C7C7;">Product Category Id</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 10px; border-bottom:2px solid #C7C7C7; border-right:2px solid #C7C7C7;">Product Price</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 10px; border-bottom:2px solid #C7C7C7;">Product quantity</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 10px; border-bottom:2px solid #C7C7C7;"></th>
   
  </tr>
_END;
echo $product;


$query = query(" SELECT * FROM products");
	confirm($query);

	while($row = fetch_array($query)){

	
$product1= <<<_YO

  <tr>
  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">{$row['product_id']}</td>
  <td style="font-family: 'Open Sans', sans-ser
  if;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;"><a href="http://localhost/ecomm/public_html/order.php?edit_products&id={$row['product_id']}"><img src="{$row['product_image']}" height="90px">
  </a></td>
  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">{$row['product_title']}</td>
  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">{$row['product_category_id']}</td>
  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">{$row['product_price']}</td>
  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">{$row['product_quantity']}</td>
  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;"><a href="delete_product.php?id={$row['product_id']}"><img src="../raw/images/multiply.png" width="35px" style="cursor:pointer;"></a></td>
  </tr>





_YO;
echo $product1;
 }      





}

if(isset($_GET['add_products'])){

$product= <<<_END
	<div id = "content">

<h1>Add Product</h1>
 

<form  action="" method="post" enctype="multipart/form-data">

<div id="r">
    <label>Product Title</label>
    <input type="text" name="product_title">

    <label>Product Description</label>
    <textarea name="product_description" cols="30" row="10">
    </textarea>
    

  
   
</div>

<div id="l">


    <label>Product Category</label>
    <select name="product_category_id">
      <option value="1">Mens</option>
      <option value="2">Womens</option>
    </select>

    <label>Product Quantity</label>
    <input type="text" name="product_quantity">

    <label>Product Price</label>
    <input type="text" name="product_price">

    <label>Product Image</label>
    <input type="file" name="file">


</div>

 <input type="submit" name="publish" value="Upload Item">
  </form>


</div>
_END;

echo $product;

}

if(isset($_GET['users'])){




$product= <<<_END

		<div id = "content">

<h1>Products</h1>

<table class="tablex";>
  <tr>
  
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 50px; border-bottom:2px solid #C7C7C7;" >User Id</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 150px; border-bottom:2px solid #C7C7C7;">User Name</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 350px; border-bottom:2px solid #C7C7C7;">Email</th>
    <th style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-right: 150px; border-bottom:2px solid #C7C7C7;">Password</th>
   
  </tr>
_END;
echo $product;


$query = query(" SELECT * FROM users");
	confirm($query);

	while($row = fetch_array($query)){

	
$product1= <<<_YO

   <tr>
  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">{$row['user_id']}</td>
  <td style="font-family: 'Open Sans', sans-ser
  if;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">{$row['username']}</td>
  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">{$row['email']}</td>
  <td style="font-family: 'Open Sans', sans-serif;font-weight:400px;padding-top: 20px;padding-left: 5px; padding-bottom: 10px;border-bottom:1px solid #D9D9D9;">{$row['password']}</td>
  </tr>





_YO;
echo $product1;
 }      





}



if(isset($_GET['edit_products'])){


	if(isset($_GET['id'])){


		$query = query("SELECT * FROM products WHERE product_id =" . escape_string($_GET['id'])."");
		confirm($query);

		while($row = fetch_array($query)){

			$product_title = escape_string($row['product_title']);
	$product_category_id = escape_string($row['product_category_id']);
	$product_price = escape_string($row['product_price']);
	$product_description = escape_string($row['product_description']);
	$product_quantity = escape_string($row['product_quantity']);

	$product_image = escape_string($row['product_image']);


	if($product_category_id == 1){
	 $men="selected"; 
	 $women=" ";} 
	if($product_category_id == 2){ 
	 $women="selected";
	 $men=" "; 

	} 
		}

	}

$product= <<<_END
	<div id = "content">

<h1>Edit Product</h1>


<form  action="" method="post" enctype="multipart/form-data">

<div id="r1">
    <label>Product Title</label>
    <input type="text" name="product_title" value="$product_title">

    <label>Product Description</label>
    <textarea name="product_description" cols="30" row="20">
    $product_description
    </textarea>
    

  
   
</div>

<div id="l">


    <label>Product Category</label>
    <select name="product_category_id">
      <option value="1" $men>Mens</option>
      <option value="2" $women>Womens</option>
    </select>

    <label>Product Quantity</label>
    <input type="text" name="product_quantity" value="$product_quantity">

    <label>Product Price</label>
    <input type="text" name="product_price" value="$product_price">

    <label>Product Image</label>
    <input type="file" name="file">

    <a href="$product_image"><img src="$product_image" height="120px"></a>

</div>

 <input type="submit"  name="update" value="Update Item">
  </form>


</div>
_END;

echo $product;

}



}




?>