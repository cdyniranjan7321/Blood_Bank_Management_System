<?php
require_once 'include/config.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$name=$_POST['name'];
	$blood_group=$_POST['blood_group'];
	$gender=$_POST['gender'];
	$day=$_POST['day'];
	$month=$_POST['month'];
	$year=$_POST['year'];
	$email=$_POST['email'];
	$contact_no=$_POST['contact_no'];
	$city=$_POST['city'];
	$password=$_POST['password'];
	$c_password=$_POST['c_password'];

	if (validate_form($name, $blood_group, $gender, $day, $month, $year, $email, $contact_no, $city, $password, $c_password)) {
		$date_of_birth = $year . '#' . $month . '#' . $day;
		$stmt = mysqli_prepare($conn, "INSERT INTO donor (name, blood_group, gender, date_of_birth, email, contact_no, city, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
		mysqli_stmt_bind_param($stmt, "ssssssss", $name, $blood_group, $gender, $date_of_birth, $email, $contact_no, $city, $password);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		echo 'Record added successfully.';
	  } else {
		echo 'Error: form validation failed.';
	  }
	}
	mysqli_close($conn);
	?>
<?php
function validate_form() {
    $errors = array();
    if (empty($_POST['name'])) {
        $errors['name'] = 'Please enter your name';
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address';
    }
	if (empty($_POST['password'])) {
        $errors['password'] = 'Please enter a password';
    }
    if (!empty($errors)) {
        return $errors;
    }
	







    return true;
}
?>