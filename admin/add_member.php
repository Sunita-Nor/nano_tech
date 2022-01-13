<?php 
require_once  'includes/database.php';
require_once  'includes/global.php';

/* การแปรงข้อมูลจาก json มาเป็น php  */
$data =  json_decode($_POST['formData'], true);

/*ใช้ในกรณีที่อยากรู้ว่าชนิดข้อมูลเป็นแบบไหน */
// var_dump($data);

/* ข้อมูลส่วนตัว  */
$email =  $data['email'];
$username = $data['username'];
$password = $data['password'];
$Cpassword = $data['Cpassword'];
$firstName = $data['firstName'];
$lastName = $data['lastName'];
$date = $data['date'];
$gender = $data['gender'];
$phone = $data['phone'];

/* ข้อมูลที่อยู่  */
$address = $data["address"];
$tambol = $data["tambol"];
$amphur = $data["amphur"];
$province = $data["province"];
$postalCode = $data["postalCode"];

$status = $data["status"];


/*INSERT INTO ชื่อตาราง  (ชื่อคอลัมน์ในฐานข้อมูล)   VALUES   (ชื่อในหน้า  form) */   
$addressSql = 'INSERT INTO address (ad_address, ad_tambol, ad_amphur, ad_province, ad_postcode) 
               VALUES (:address, :tambol, :amphur, :province, :postCode)'; 
              
$statement = $pdo->prepare($addressSql);

$params = array(
  ":address" => $address,
  ":tambol"  => $tambol,
  ":amphur"  => $amphur,
  ":province"  => $province,
  ":postCode"  => $postalCode
);

if ($statement->execute($params)) {
  $ad_id = $pdo->lastInsertId();
}

if ($ad_id) {
  $memberSql = 'INSERT INTO member (mb_email, mb_username, mb_password, mb_Cpassword, mb_firstName, mb_lastName, mb_date, mb_gender, mb_phone, status)
                VALUES (:email, :username, :password, :Cpassword, :firstName, :lastName, :date, :gender, :phone, :status)';

  $statement = $pdo->prepare($memberSql);
  
  $memberParams = [
    ':email' => $email,
    ':username' => $username,
    ':password' => $password,
    ':Cpassword' => $Cpassword,
    ':firstName' => $firstName,
    ':lastName' => $lastName,
    ':date' => $date,
    ':gender' => $gender,
    ':phone' => $phone,
    ':status' => $status
  ];

  if ($statement->execute($memberParams)) {
    $mb_id = $pdo->lastInsertId();
    $member_addressSql = 'INSERT INTO member_address (mb_id, ad_id) VALUE(:mb_id, :ad_id)';
    $statement = $pdo->prepare($member_addressSql);
    
    if ($statement->execute([
      ':mb_id' => $mb_id,
      ':ad_id' => $ad_id
    ])) {
      echo "True";
    } else {
      echo "False";
    } 
  } 

} else {
  echo "ไม่สามารถเพิ่มสมาชิก";
}

?>