<?php
include "../includes/db_con.php";
$contact_name = mysqli_real_escape_string($dbcon,$_POST['full_name']);
$contact_email = mysqli_real_escape_string($dbcon,$_POST['email']);
$contact_subject = mysqli_real_escape_string($dbcon,$_POST['subject']);
$contact_mobile = mysqli_real_escape_string($dbcon,$_POST['phone']);
$contact_message = mysqli_real_escape_string($dbcon,$_POST['message']);

$contact_query = mysqli_query($dbcon,"insert into tbl_contact_enquiries set 
contact_name='".$contact_name."',contact_mobile='".$contact_mobile."',contact_email='".$contact_email."',contact_subject='".$contact_subject."',contact_message='".$contact_message."'");

if($contact_query == true){
    echo"Contact details Submitted";
}
else{
    echo"contact details failed to submit";
}
?>