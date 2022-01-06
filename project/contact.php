<?php
$firstname = $_REQUEST['FirstName'];
$lastname = $_REQUEST['LastName'];
$EmailID = $_REQUEST['EmailID'];
$firstname = $_REQUEST['MobileNumber'];

if(empty($firstname) || (empty($lastname) || (empty($EmailID)  )
{
    echo "Please fill all the details";
}

else
{
 mail("ikmeetkaur971@gmail.com", web message, $lastname ,"From: $firstname <$EmailID>");
 echo "<script type='text/javascript'>alert('Successful');
 window.history.log(-1);
 </script>";
}
?>
