<?php
     if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];


$to='iit2019239@iiita.ac.in';
$subject='Students Corner New Registration';
$message="Name: ".$name."\n"."phone: ".$number";
$headers="From: ".$email;


if(mail($to, $subject, $message, $headers))
    {
      echo "<h1> Sent Successfully ! Thank u".".$name.", We will conatct def.</h1>";
  }
else
{
   echo" Something went wrong!";
}
}
?>
