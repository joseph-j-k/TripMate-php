 <option>----select---</option>
 <?php
include('../Connection/Connection.php');

$selQry = "select * from tbl_location where place_id = ".$_GET['did'];
$result = $con->query($selQry);
while($row = $result->fetch_assoc())
{
	?>
    <option value="<?php echo $row['location_id']?>"><?php echo $row['location_name']?></option>
    <?php
}

?>