<?php
include "../includes/db_con.php";
$delete_id = $_POST['delId'];

$delete_query = mysqli_query($dbcon,"delete from tbl_contact_enquiries where 
contact_id = '".$delete_id."'");

if($delete_query == true)
{
    echo "deleted Successfully";
}
else {
    echo "Error while deleting the entry";
}
?>