<?php
require_once 'includes/database.php';
require_once 'includes/function.php';

if(isset($_POST["operation"])){

    if($_POST["operation"] == "Add"){
        $statement = $pdo->prepare("INSERT INTO  product_type (pt_name) VALUES (:pt_name)");
        $result = $statement->execute(
            array(
                ':pt_name' => $_POST["pt_name"]
            )
            );
    }

    if($_POST["operation"] == "Edit"){
        $statement = $pdo->prepare("UPDATE product_type SET pt_name = :pt_name WHERE pt_id = :pt_id");
        $result = $statement->execute(
            array(
                ':pt_name' => $_POST["pt_name"],
                ':pt_id'   => $_POST["pt_id"]
            )
            );
    }
}
?>