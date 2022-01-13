<?php
require_once 'includes/database.php';
require_once 'includes/function.php';

if(isset($_POST["pt_id"]))
{
  $statement = $pdo->prepare("DELETE FROM product_type WHERE pt_id = :pt_id");
  $result = $statement->execute(
    array(':pt_id' => $_POST["pt_id"])
  );
}

?>