<?php
    

if (isset($_REQUEST['email'])){
    $admin_email = "ghassen.yahyaoui@esprit.tn";
  $email = $_REQUEST['email'];
  $name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
  $message = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$name", $message, "From:" . $email." Phone: ".$phone);
echo "Thank you for contacting us!";
}
else {
    echo"wrong";
}
echo "waaaat";

?>