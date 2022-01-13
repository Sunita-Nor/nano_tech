<?php
require_once 'includes/database.php';
require_once 'includes/function.php';

if(isset($_POST["pt_id"]))
{
  $output = array();
  $query = 'SELECT * FROM product_type WHERE pt_id = "'.$_POST["pt_id"].'" LIMIT 1';
  $statement = $pdo->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();

  foreach($result as $row)
  {
    $output["pt_id"] = $row["pt_id"];
    $output["pt_name"] = $row["pt_name"];
  }
  echo json_encode($output);
}

?>