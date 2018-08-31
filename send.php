<?php

if (isset($_POST['fname']) && isset($_POST['subject']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['message'])){
if (!empty($_POST['fname']) && !empty($_POST['subject']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['message'])){
 $fname = $_POST['fname'];
 $subject = $_POST['subject'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  echo 'kindly Provide Valid Email';
 } else {
  $body = $fname."\n".$subject."\n".$phone."\n".$email."\n".$message;
  if(mail('your receive e-mail ', 'Your Subject ', $body , 'From: your sender e-mail')){
   echo '<color font="black">Thanks for your contacting.</font>';
  } else {
   echo 'There is a problem in sending mail.';
  }
 }
 
 } else {
  echo 'ALL Fields are required.';
 }
}   else {
 echo 'ok';
}


?>

<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html" />
<link rel="stylesheet" href="form.css" type="text/css">
<title>contact us</title>
</head>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Frist Name" type="text" name="fname" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your subject" type="text" name="subject" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone" type="text" name="phone" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Email ID" type="text" name="email" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." name="message" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>
</html>

<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html" />
<link rel="stylesheet" href="form.css" type="text/css">
<title>contact us</title>
</head>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Frist Name" type="text" name="fname" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your subject" type="text" name="subject" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone" type="text" name="phone" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Email ID" type="text" name="email" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." name="message" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>
</html>