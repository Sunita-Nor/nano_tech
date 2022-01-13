<?php
function get_total_all_records()
{
  include 'database.php';
	$statement = $pdo->prepare("SELECT * FROM product_type");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}
?>