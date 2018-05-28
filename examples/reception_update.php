<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="kdu";

$patient_id = "";
$date_of_reg ="";
$full_name = "";
$dob = "";
$age= "";
$gender = "";
$civil = "";
$birthplace = "";
$religion = "";
$guardian = "";
$address = "";
$contact = "";
$email = "";



mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 
//connect to mysql database
try{
$conn =mysqli_connect($servername,$username,$password,$dbname);
}catch(MySQLi_Sql_Exception $ex){
echo("error in connecting");
}

//get data from the form
function getData()
{
$data = array();
$data[0]=$_POST['patient_id'];
$data[1]=$_POST['date_of_reg'];
$data[2]=$_POST['full_name'];
$data[3]=$_POST['dob'];
$data[4]=$_POST['age'];
$data[5]=$_POST['gender'];
$data[6]=$_POST['civil'];
$data[7]=$_POST['birthplace'];
$data[8]=$_POST['religion'];
$data[9]=$_POST['guardian'];
$data[10]=$_POST['address'];
$data[11]=$_POST['contact'];
$data[12]=$_POST['email'];


return $data;
}




if(isset($_POST['update']))
{
$info = getData();
$update_query="UPDATE `patient_detail` SET  `date_of_reg`='$info[1]',full_name='$info[2]',dob='$info[3]',age='$info[4]',gender='$info[5]' ,civil='$info[6]' ,birthplace='$info[7]' ,religion='$info[8]' ,guardian='$info[9]' ,address='$info[10]' ,contact='$info[11]' ,email='$info[12]'  WHERE patient_id = '$info[0]'";

$update_result=mysqli_query($conn, $update_query);
  if($update_result)
  {
     if(mysqli_affected_rows($conn)>0)
     {
        echo("data updated");
     }
     else
     {
        echo("data not updated");
     }

  }
}

else
{
  echo("There's an error in updating.");
}

?>