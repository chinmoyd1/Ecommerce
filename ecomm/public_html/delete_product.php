<?php require_once("../resources/config.php");

if(isset($_GET['id'])){

$query = query("DELETE FROM products WHERE product_id = " . escape_string($_GET['id']));

confirm($query);


set_message("Product Deleted");
 
redirect("order.php?view_products");
}else{

set_message("Soory! we ran into some issues Product couldn't be Deleted");
redirect("order.php?orders");

}







?>