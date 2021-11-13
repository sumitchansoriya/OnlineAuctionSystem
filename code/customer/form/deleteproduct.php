<?php
include_once 'db.php';
$sql = "DELETE FROM bid WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Deleted Succesfully')
    window.location.href='../viewbid.php';
    </SCRIPT>");
    // header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/Viewcharge.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>