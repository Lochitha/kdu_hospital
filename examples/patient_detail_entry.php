<?php
$patient_id= $_POST['patient_id'];
$date_of_reg = $_POST['date_of_reg'];
$full_name = $_POST['full_name'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$civil = $_POST['civil'];
$birthplace = $_POST['birthplace'];
$religion = $_POST['religion'];
$guardian = $_POST['guardian'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];

if (!empty($patient_id) || !empty($date_of_reg) || !empty($full_name) || !empty($dob) || !empty($age) || !empty($gender) || !empty($civil) || !empty($birthplace) || !empty($religion) || !empty($guardian) || !empty($address) || !empty($contact) || !empty($email) )
{
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname="kdu";



$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT patient_id From patient_detail Where patient_id = ? Limit 1";
     $INSERT = "INSERT Into patient_detail (patient_id, date_of_reg, full_name, dob, age, gender, civil , birthplace , religion , guardian , address, contact, email ) values(?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?)";

     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $patient_id);
     $stmt->execute();
     $stmt->bind_result($patient_id);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("iisiissssssis", $patient_id, $date_of_reg, $full_name, $dob, $age, $gender, $civil , $birthplace , $religion , $guardian , $address, $contact, $email);
      $stmt->execute();
      echo "New Data was inserted successfully.";
       
     } else {
      echo "The article ID already exists!";
     }
     $stmt->close();
     $conn->close();
    }
} 
else
{
echo "Please double check and enter the data correctly! Thank you!";
die();
}

?>