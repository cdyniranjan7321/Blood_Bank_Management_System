<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Form Submit to Send Email</title>
<link rel="stylesheet" type="text/css" href="css/email.css">
</head>
<body>

<?php
if(!empty($_POST["send"])) {
	$userName = $_POST["userName"];
  $userEmail = $_POST["userEmail"];
	$userPhone = $_POST["userPhone"];
	$userMessage = $_POST["userMessage"];
	$toEmail = "websolution90@gmail.com";
  
	$mailHeaders = "Name: " . $userName .
	"\r\n Email: ". $userEmail  . 
	"\r\n Phone: ". $userPhone  . 
	"\r\n Message: " . $userMessage . "\r\n";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>

<div class="form-container">
  <form name="contactFormEmail" method="post">
    <div class="input-row">
      <label>Name <em>*</em></label> 
      <input type="text" name="userName" required id="userName"> 
    </div>
    <div class="input-row">
      <label>Email <em>*</em></label> 
      <input type="email" name="userEmail" required id="userEmail"> 
    </div>
    <div class="input-row">
      <label>Phone <em>*</em></label> 
      <input type="text" name="userPhone" required id="userPhone">
    </div>
    <div class="input-row">
      <label>Message <em>*</em></label> 
     <!-- <textarea name="userMessage" required id="userMessage"> -->
    </div>
    <div class="input-row">
      <input type="submit" name="send" value="Submit">
      <?php if (! empty($message)) {?>
      <div class='success'>
        <strong><?php echo $message; ?>	</strong>
      </div>
      <?php } ?>
    </div>
  </form>
</div>

</body>
</html>


