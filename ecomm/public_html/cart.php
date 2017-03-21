<?php require_once("../resources/config.php");?>

<?php 

if(isset($_GET['add'])) {

if(isset($_GET['username'])){
  $admin=escape_string($_GET['username']) ;

	$query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['add'])." ");
	confirm($query);

	while($row = fetch_array($query)) {

		if($row['product_quantity'] > $_SESSION['product_' . $_GET['add']]){

			 $_SESSION['product_' . $_GET['add']] += 1;
			 redirect("checkout.php?username=$admin");
		} else {

			set_message ("We only have " . $row['product_quantity'] . " ".$row['product_title'] ." " . " available");
			redirect("checkout.php?username=$admin");

		}
	}
}
else{
	$query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['add'])." ");
	confirm($query);

	while($row = fetch_array($query)) {

		if($row['product_quantity'] > $_SESSION['product_' . $_GET['add']]){

			 $_SESSION['product_' . $_GET['add']] += 1;
			 redirect("checkout.php");
		} else {

			set_message ("We only have " . $row['product_quantity'] . " ".$row['product_title'] ." " . " available");
			redirect("checkout.php");

		}
	}

}
}
//$_SESSION['product_' . $_GET['add']] +=1;

	

	//redirect("mens.php");
if(isset($_GET['remove'])) {


	$_SESSION['product_' . $_GET['remove']]--;

if(isset($_GET['username'])){
  $admin=escape_string($_GET['username']) ;

	if($_SESSION['product_' . $_GET['remove']] < 1){
		unset($_SESSION['item_total']);
	    unset($_SESSION['item_quantity']);
	 	redirect("checkout.php?username=$admin");
    } else{
    	redirect("checkout.php?username=$admin");
    }
   }

else{
	$admin=escape_string($_GET['username']) ;

	if($_SESSION['product_' . $_GET['remove']] < 1){
		unset($_SESSION['item_total']);
	    unset($_SESSION['item_quantity']);
	 	redirect("checkout.php");
    } else{
    	redirect("checkout.php");
    }
}

}


if(isset($_GET['delete'])) {


if(isset($_GET['username'])){
  $admin=escape_string($_GET['username']) ;

	$_SESSION['product_' . $_GET['delete']] = '0';
	redirect("checkout.php?username=$admin");
	unset($_SESSION['item_total']);
	unset($_SESSION['item_quantity']);}

else{
	$_SESSION['product_' . $_GET['delete']] = '0';
	redirect("checkout.php");
	unset($_SESSION['item_total']);
	unset($_SESSION['item_quantity']);
}
}






function cart() {

$total=0;
$item_quantity=0;
$item_title= " ";
$x=0;
foreach ($_SESSION as $name => $value){


	if($value > 0){

		if(substr($name, 0, 8) == "product_"){



			$length = strlen($name - 8);
			$id = substr($name, 8, $length);



		$query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). " ");
        confirm($query);




while($row = fetch_array($query)){

$sub = $row['product_price']*$value;
$item_quantity +=$value;


if(isset($_GET['username'])){
  $admin=escape_string($_GET['username']) ;

$product = <<<END




<tr>
<td>
<div id="item" style="float:left">
      <a href="item.php?id={$row['product_id']}">
 	    <img src="{$row['product_image']}" height="90px">
 		</a>
 	  
  </div>
{$row['product_title']}
</td>

<td>\${$row['product_price']}</td>
<td>{$value}</td>
<td>\${$sub}</td>
<td>

    <div id="left"><a href ="cart.php?add={$row['product_id']}&username=$admin"><img src="../raw/images/add.png" width="35px"></a> </div>
    <div id="center"><a href ="cart.php?remove={$row['product_id']}&username=$admin"><img src="../raw/images/minus.png" width="35px"></a></div>
    <div id="right"><a href ="cart.php?delete={$row['product_id']}&username=$admin"><img src="../raw/images/multiply.png" width="35px"></a></div>

    </td>
    </tr>




END;

echo $product;


$_SESSION['item_total'] = $total += $sub;
$_SESSION['item_quantity'] = $item_quantity;
$_SESSION['item_title '] = $item_title = $item_title ." " .$value."-".$row['product_title']." x ".$row['product_price']." = ".$sub .",";;
 


$pro_quan =	$row['product_quantity'] - $value;


$query1 ="UPDATE products SET ";
	$query1 .="product_title='{$row['product_title']}',";
	$query1 .="product_category_id='{$row['product_category_id']}',";
	$query1 .="product_price='{$row['product_price']}',";
	$query1 .="product_description='{$row['product_description']}',";
	$query1 .="product_image='{$row['product_image']}',";
	$query1 .="product_quantity='{$pro_quan}'";
	$query1 .="WHERE product_id='{$row['product_id']}';";


//echo $query1;
$queryX[$x] =$query1;

	//echo $x;
	//echo $queryX[$x];
$x++;

//set_message($query1);
}
else{


$product = <<<END




<tr>
<td>
<div id="item" style="float:left">
      <a href="item.php?id={$row['product_id']}">
 	    <img src="{$row['product_image']}" height="90px">
 		</a>
 	  
  </div>
{$row['product_title']}
</td>

<td>\${$row['product_price']}</td>
<td>{$value}</td>
<td>\${$sub}</td>
<td>

    <div id="left"><a href ="cart.php?add={$row['product_id']}"><img src="../raw/images/add.png" width="35px"></a> </div>
    <div id="center"><a href ="cart.php?remove={$row['product_id']}"><img src="../raw/images/minus.png" width="35px"></a></div>
    <div id="right"><a href ="cart.php?delete={$row['product_id']}"><img src="../raw/images/multiply.png" width="35px"></a></div>

    </td>
    </tr>




END;

echo $product;


$_SESSION['item_total'] = $total += $sub;
$_SESSION['item_quantity'] = $item_quantity;
$_SESSION['item_title '] = $item_title = $item_title ." " .$value."-".$row['product_title']." x ".$row['product_price']." = ".$sub .",";;
 


$pro_quan =	$row['product_quantity'] - $value;


$query1 ="UPDATE products SET ";
	$query1 .="product_title='{$row['product_title']}',";
	$query1 .="product_category_id='{$row['product_category_id']}',";
	$query1 .="product_price='{$row['product_price']}',";
	$query1 .="product_description='{$row['product_description']}',";
	$query1 .="product_image='{$row['product_image']}',";
	$query1 .="product_quantity='{$pro_quan}'";
	$query1 .="WHERE product_id='{$row['product_id']}';";


//echo $query1;
$queryX[$x] =$query1;

	//echo $x;
	//echo $queryX[$x];
$x++;

//set_message($query1);


}

}








}

	}

	


}











	$jio = <<<END
<div id="hidden">
<form  action="" method="post" enctype="multipart/form-data">

    <input type="text" name="order_amount" value=" $total ">
    <input type="text" name="order_items" value=" $item_quantity ">
    <input type="text" name="order_name" value=" $item_title ">
</div>

<div id="bnow" >
 <input type="submit" name="buy" class="button9" value="Buy Now">
 </div>

</form>





END;

echo $jio;



if(isset($_POST['buy'])) {


	if(isset($_GET['username'])){
  $admin=escape_string($_GET['username']) ;


	$order_name = escape_string($_POST['order_name']);
	$order_items = escape_string($_POST['order_items']);
	$order_amount = escape_string($_POST['order_amount']);

if($order_amount==0){
set_message("Cart Empty");
}
else{
	$query = query("INSERT INTO orders(ordered_by,order_name,order_items,order_amount) VALUES('{$admin}','{$order_name}','{$order_items}','{$order_amount}')");
	
	confirm($query);

	for ($count = 0 ; $count < $x; ++$count)
		{
			//echo $queryX[$count] ;
			//echo "<br><br><br>";
			$send_update_query = query($queryX[$count]);
			confirm($query);

		}


	set_message("Order Placed");
	redirect("thankyou.php");
	}
}
else{

set_message("Please LOGIN First!");

}

}

}



/*<tr>
    <td>

 <div id="item" style="float:left">
      <a href="item.php?id={$row['product_id']}">
 	    <img src="{$row['product_image']}" height="80px">
 		</a>
 	  
  </div>


    {$row['product_title']}
    </td>
    <td valign="center" style="padding-top:0px;">\${$row['product_price']}</td>
    <td valign="center>{$value}</td>
    <td valign="center">\${$sub}</td>
    <td>

    <div id="left"><a href ="cart.php?add={$row['product_id']}"><img src="../raw/images/add.png" width="35px"></a> </div>
    <div id="center"><a href ="cart.php?remove={$row['product_id']}"><img src="../raw/images/minus.png" width="35px"></a></div>
    <div id="right"><a href ="cart.php?delete={$row['product_id']}"><img src="../raw/images/multiply.png" width="35px"></a></div>

    </td>
</tr>*/
?> 