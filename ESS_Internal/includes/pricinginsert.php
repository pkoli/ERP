<?php
$Price_list_name=$_POST['plist'];
$Brand=$_POST['catname'];
$Category=$_POST['category'];
$Model_number=$_POST['model_num'];
$Unit_of_measurement=$_POST['UOM'];
$price=$_POST['price'];
$discount=$_POST['discount'];
$Hot_buy_flag=$_POST['hbf'];
   // connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->db_ess;
   $collection = $db->ess_pricing_info;
$document = array( 
      "Price_List_Name"=>$Price_list_name,
      "Brand"=>$Brand,
      "Category"=>$Category,
      "Model_number"=>$Model_number,
      "Unit_of_measurement"=>$Unit_of_measurement,
	"price"=>$price,
	"discount"=>$discount,
       "Hot_buy_flag"=>$Hot_buy_flag);
  $collection->insert($document);
echo"<h1 align='center'>Successfully Inserted Price for the item<a href='../productm.php'>Go back</a></h1>";
?>
