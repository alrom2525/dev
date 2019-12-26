<?php
require '../connexion/connexion.php';

// $sfd_Confirmation_Pending="Your registration has not yet been confirmed!";
// 1. The email exist?
$email=$_GET['emailx'];
echo $email;

$sql1 = "SELECT COUNT(email) AS exist FROM ges_user WHERE  email='$email'; ";
$sql2 = "SELECT COUNT(email) AS exist FROM ges_user WHERE  email='$email' AND activate=0; ";
if (sfd_validate_record($sql1,$__connexion)==false)  
  $emailErr=$sfd_Email_Unexist;
else {
//  2. The account is Active?
  if (sfd_validate_record($sql2,$__connexion)==true)
    $emailErr=$sfd_Confirmation_Pending;
  else {
    // Exist
    echo "Exist";
  } // else if (sfd_validate_record($sql2,$__connexion)==true)
} // else - if (sfd_validate_record($sql,$__connexion)==false)

$__connexion->close(); 

 ?>