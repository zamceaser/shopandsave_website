<?php
$productid = $_REQUEST['prod_id']; //Of course do sanitation 
                                     //before using get,post variables

//though you should be using mysqli_* functions as mysql_* are depreciated
$result = mysql_query("select * from products where prod_id ='{$productid}"); 

$product = mysql_fetch_object($result);

include("item.php");