<!DOCTYPE html>
<html>
<head>
	<title>Certificate of Appreciation</title>
	<link rel="stylesheet" type="text/css" href="stylec.css">
</head>
<body>
	<?php
	if(isset($_POST['generate'])) {
		$username = $_POST['username'];
		$bloodgroup = $_POST['bloodgroup'];

		// Generate certificate document
		$certificate = "<div class='certificate'>
			<h2>Certificate of Appreciation</h2>
            <br><p>To kind you</p>
			<p>&nbsp&nbsp&nbspThis is to certify that <strong>$username</strong> has donated blood of <strong>$bloodgroup</strong> group and has made a valuable contribution towards saving lives. Your kindness and generosity is highly appreciated and will go a long way in making a difference in someone's life.</p>
			<div class='signature'>
  <div>
    <span>_________________________</span>
    </br><span>Dr.Ram Thapa<br>Chief Medical Officer</span>
    
  </div>
  <div>
    <span>_________________________</span>
    <br/><span>maya hamjayega<br>Blood Bank Coordinator</span>
  </div>
  <div class='name'>
    <span>_________________________</span>
    <br/><span>the great khali<br>Blood Donor</span>
  </div>
</div>




		</div>";

		// Display certificate
		echo $certificate;
	}
	?>
</body>
</html>
