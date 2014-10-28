<?php
if (isset($_REQUEST['email'])) //if "email" is filled out, send email!!!
  {
  //send email
  $firstname = $_REQUEST['firstname'] ;
  $lastname = $_REQUEST['lastname'] ;
  $address = $_REQUEST['address'] ;
  $city = $_REQUEST['city'] ;
  $country = $_REQUEST['country'] ;
  $postcode = $_REQUEST['postcode'] ;
  $phonenumber = $_REQUEST['phonenumber'] ;
  $email = $_REQUEST['email'] ;
  $mail( "poole.caroline@yahoo.com", "$firstname $lastname",
  $question, "From: $email" );
  }
// --------------------------------------------------------------------
// An Error Message is a message printed on the screen. An Alert is a Message Box that is displayed in the middle of the screen and looks great!
// If no email entered: Print an error. 
elseif (empty($email))
{
alert("No email address was entered." <br /> "Please enter your email now.");
}
// If both no text message and no email entered then: Print an error message. 
elseif (empty($TextMessage) && empty($email))
{
alert("No email address and no message was entered." <br /> "Please include an email and a text message");
}
// If no text message entered: Print an error message.
elseif (empty($TextMessage))
{
alert("No message was entered today." <br /> "Please include your message in text message box.");
}
?>