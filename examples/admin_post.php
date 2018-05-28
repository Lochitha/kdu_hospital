<?php

include("../config/db_connect.php");

if(isset($_POST['confirm'])){

	$consultant_id=$_POST['consultant_id'];
		
	/*if($_POST['actor']=="ss")
		$sql1="delete from student where sid=".$_POST['sid']."";
	elseif($_POST['actor']=="tt")
		$sql1="delete from teacher where tid=".$_POST['tid'];
		*/
	$sql="UPDATE consultant_detail
SET active = 1
WHERE consultant_id ='$consultant_id' ";

if ($conn->query($sql) === TRUE) {
   
    header('location:../examples/admin.php');
    $conn->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	/*if(mysqli_query($GLOBALS['conn'], $sql1)){
		echo "Record deleted successfully";
		//delete student and redirect to main page
		echo "<script type='text/javascript'>";
		echo "alert('Record deleted succesfully.');";
		echo "window.location.href = 'index.php';";
		echo "</script>";
	}*/
	
}


if(isset($_POST['deny'])){

	$consultant_id=$_POST['consultant_id'];
		
	/*if($_POST['actor']=="ss")
		$sql1="delete from student where sid=".$_POST['sid']."";
	elseif($_POST['actor']=="tt")
		$sql1="delete from teacher where tid=".$_POST['tid'];
		*/
	$sql="DELETE FROM consultant_detail
	WHERE consultant_id ='$consultant_id' ";

if ($conn->query($sql) === TRUE) {
   
    header('location:../examples/admin.php');
    $conn->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	/*if(mysqli_query($GLOBALS['conn'], $sql1)){
		echo "Record deleted successfully";
		//delete student and redirect to main page
		echo "<script type='text/javascript'>";
		echo "alert('Record deleted succesfully.');";
		echo "window.location.href = 'index.php';";
		echo "</script>";
	}*/
	
}

if(isset($_POST['remove'])){

	$consultant_id=$_POST['consultant_id'];
		
	/*if($_POST['actor']=="ss")
		$sql1="delete from student where sid=".$_POST['sid']."";
	elseif($_POST['actor']=="tt")
		$sql1="delete from teacher where tid=".$_POST['tid'];
		*/
	$sql="DELETE FROM consultant_detail
	WHERE consultant_id ='$consultant_id' ";

if ($conn->query($sql) === TRUE) {
   
    header('location:../examples/admin.php');
    $conn->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	/*if(mysqli_query($GLOBALS['conn'], $sql1)){
		echo "Record deleted successfully";
		//delete student and redirect to main page
		echo "<script type='text/javascript'>";
		echo "alert('Record deleted succesfully.');";
		echo "window.location.href = 'index.php';";
		echo "</script>";
	}*/
	
}

?>

