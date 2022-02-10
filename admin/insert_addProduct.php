<?php
require_once 'includes/database.php';
require_once 'includes/function.php';

$pm_name = $_POST["pm_name"];
$pt_id = $_POST["pt_id"];
$pm_price = $_POST["pm_price"];
$pm_certification = $_POST["pm_certification"];
$pm_material = $_POST["pm_material"];
$pm_detail = $_POST["pm_detail"];
$pd_color = $_POST["pd_color"];
$pd_number = $_POST["pd_number"];
$image = $_FILES["image"];

$totalImg = count($_FILES['image']['name']);
$result = array_filter($pd_number);
$totalNumber = count($result);

try {
	$query = "INSERT INTO productmaster (pm_name, pt_id, pm_price, pm_certification, pm_material, pm_detail) VALUES
	(?, ?, ?, ?, ?, ?)";
	$stmt = $pdo->prepare($query);
	$stmt->execute([$pm_name, $pt_id, $pm_price, $pm_certification, $pm_material, $pm_detail]);
	$lastInsertId = $pdo->lastInsertId();
	
	for ($i = 0; $i < $totalNumber; $i++) {
		$pdQuery = "INSERT INTO product_detail (pm_id, pd_color, pd_number) VALUES (?, ?, ?)";
		$stmt = $pdo->prepare($pdQuery);
		$stmt->execute([$lastInsertId, $pd_color[$i], $pd_number[$i]]);
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}


try {
	for ($i = 0; $i < $totalImg; $i++) {
		$pname =  $_FILES['image']['name'][$i];
		$tname =  $_FILES['image']['tmp_name'][$i];
		$name = pathinfo($pname, PATHINFO_FILENAME);
		$extension = pathinfo($pname, PATHINFO_EXTENSION);
		$uploads_dir = '../admin/upload/';
		$deletePath = $uploads_dir . $_FILES['image']['name'][$i];
		$increment = 0;
		$pname = $name . '.' . $extension;
		while (is_file($uploads_dir . $pname)) {
				$increment++;
				$pname = $name . $increment . '.' . $extension;
		}
		move_uploaded_file($tname, $uploads_dir . $pname);
	
		$imgQuery = "INSERT INTO product_img (pm_id, img_name) VALUES (?, ?)";
		$stmt = $pdo->prepare($imgQuery);
		$stmt->execute([$lastInsertId, 'upload/' . $pname]);
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>