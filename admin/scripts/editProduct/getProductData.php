<?php
	include '../../includes/database.php';
	$array = ["products" => array(), "productImg" => array(), "productType" => array()];
	$pm_id = $_GET['pm_id'];
	$stmt = $pdo->prepare("SELECT * FROM productmaster pm 
	LEFT JOIN product_type pt ON pt.pt_id = pm.pt_id
	LEFT JOIN product_detail pd ON pm.pm_id = pd.pm_id WHERE pm.pm_id = ?");
	$stmt->execute([$pm_id]);
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		array_push($array['products'], $row);
	}

	$stmt = $pdo->prepare("SELECT * FROM productmaster pm 
	LEFT JOIN product_img pimg ON pm.pm_id = pimg.pm_id WHERE pm.pm_id = ?");
	$stmt->execute([$pm_id]);
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		array_push($array['productImg'], $row);
	}

	$stmt = $pdo->prepare("SELECT * FROM product_type");
	$stmt->execute();
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		array_push($array['productType'], $row);
	}

	echo json_encode($array);
?>