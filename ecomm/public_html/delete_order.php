<?php require_once("../resources/config.php");

if(isset($_GET['id'])){

$query = query("DELETE FROM orders WHERE order_id = " . escape_string($_GET['id']));

confirm($query);


set_message("Order Deleted");

redirect("order.php?orders");
}else{

set_message("Soory! we ran into some issues Order couldn't be Deleted");
redirect("order.php?orders");

}







?>