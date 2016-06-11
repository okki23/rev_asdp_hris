<?php
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;

include 'conn.php';
$result = array();
$sql = "select * from products where parentId=$id";
$rs=mysqli_query($con,$sql);
while($row = mysqli_fetch_array($rs)){
	$row['state'] = has_child($row['id']) ? 'closed' : 'open';
	$row['total'] = $row['price']*$row['quantity'];
	array_push($result, $row);
}
//echo $result;
echo json_encode($result);

function has_child($id){
	include 'conn.php';
	$sql = "select count(*) from products where parentId=$id";
	$rs=mysqli_query($con,$sql);
	//$rs = mysqli_query("select count(*) from products where parentId=$id");
	$row = mysqli_fetch_array($rs);
	return $row[0] > 0 ? true : false;
}
//$sql="SELECT Lastname,Age FROM Persons ORDER BY Lastname";
//$result=mysqli_query($con,$sql);

// Numeric array
//$row=mysqli_fetch_array($result,MYSQLI_NUM);
//printf ("%s (%s)\n",$row[0],$row[1]);
?>
