<?php
include 'configur.php';
session_start();
if(isset($_POST['submit'])){
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = test_input($_POST['password']);
$select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND
password = '$pass'") or die('query failed');
if(mysqli_num_rows($select) > 0){
$row = mysqli_fetch_assoc($select);
$_SESSION['user_id'] = $row['id'];
header('location:Home2.php');
}else{
$message[] = 'incorrect email or password!';
}
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>login</title>
<!-- custom css file link -->
<link rel="stylesheet" href="style_form.css">
</head>
<body>
<div class="form-container">
<form action="" method="post" enctype="multipart/form-data">
<h3>login now</h3>
<?php
if(isset($message)){
foreach($message as $message){
echo '<div class="message">'.$message.'</div>';
}
}
?>
<input type="email" name="email" placeholder="enter email" class="box" required>
<input type="password" name="password" placeholder="enter password" class="box"
required>
<input type="submit" name="submit" value="login now" class="btn">
<p>don't have an account? <a href="register.php">regiser now</a></p>
</form>
</div>
</body>
</html>
Find Exam
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="Exam.css">
<title>Find Exams</title>
</head>
<body>
<div class="container">
<div class="heading">
<button class="btn1">Find exam</button>
</div>
<div class="exam1">
<fieldset class="exam1 engg">
<legend>Engineering</legend>
<div class="exam1 enggbox1">

<div class="part1">
<div class="col">
<div class="card h-100">
<img src="Photo\Adv.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">JEE ADVANCED</h4>
<p class="card-text">Entrance exam for IITs</p>
<a href="https://jeeadv.ac.in/" target="_blank"
class="btn btn-primary">See
Details..</a>
</div>
</div>
</div>
</div>
<div class="part2">
<div class="col">
<div class="card h-100">
<img src="Photo\main.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">JEE MAIN</h4>
<p class="card-text">Entrance exam for NITs</p>
<a href="https://jeemain.nta.nic.in/about-jeemain2023/" target="_blank"
class="btn btn-primary">See Details..</a>
</div>
</div>
</div>
</div>
<div class="part3">
<div class="col">
<div class="card h-100">
<img src="Photo\VITEEE23.jpg" class="card-img-top"
alt="...">
<div class="card-body">
<h4 class="card-title">VITEEE</h4>
<p class="card-text">Entrance exam for VITs</p>
<a href="https://viteee.vit.ac.in/" target="_blank"
class="btn btn-primary">See
Details..</a>
</div>
</div>
</div>
</div>
</div>
<div class="exam1 enggbox2">
<div class="part4">
<div class="col">
<div class="card h-100">
<img src="Photo\bitsat.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">BITSAT</h4>
<p class="card-text">Entrance exam for BITs</p>
<a href="https://www.bitsadmission.com/"
target="_blank" class="btn btn-primary">See
Details..</a>
</div>
</div>

</div>
</div>
<div class="part5">
<div class="col">
<div class="card h-100">
<img src="Photo\srm.jpeg" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">SRMJEEE</h4>
<p class="card-text">Entrance exam for SRM</p>
<a href="https://www.srmist.edu.in/" target="_blank"
class="btn btn-primary">See
Details..</a>
</div>
</div>
</div>
</div>
<div class="part6">
<div class="col">
<div class="card h-100">
<img src="Photo\aeee.jpeg" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">AEEE</h4>
<p class="card-text">Amrita Entrance Examination</p>
<a href="https://www.amrita.edu/admissions/btech/"
target="_blank"
class="btn btn-primary">See Details..</a>
</div>
</div>
</div>
</div>
</div>
</>
</div>
<div class="exam2">
<fieldset class="exam2 engg">
<legend>Medical</legend>
<div class="exam2 enggbox1">
<div class="part1">
<div class="col">
<div class="card h-100">
<img src="Photo\neet.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">NEET</h4>
<p class="card-text">Medical entrance exam</p>
<a href="https://neet.nta.nic.in/information-bulletin/"
target="_blank"
class="btn btn-primary">See Details..</a>
</div>
</div>
</div>
</div>
<div class="part2">
<div class="col">
<div class="card h-100">
<img src="Photo\aiims.png" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">AIIMS</h4>
<p class="card-text">Medical entrance exam</p>

<a href="https://www.aiimsexams.ac.in/" target="_blank"
class="btn btn-primary">See
Details..</a>
</div>
</div>
</div>
</div>
<div class="part3">
<div class="col">
<div class="card h-100">
<img src="Photo\jipmer.jpeg" class="card-img-top"
alt="...">
<div class="card-body">
<h4 class="card-title">JIPMER</h4>
<p class="card-text">Entrance exam for JIPMER</p>
<a href="https://jipmer.edu.in/" target="_blank"
class="btn btn-primary">See
Details..</a>
</div>
</div>
</div>
</div>
</div>
<div class="exam2 enggbox2">
<div class="part4">
<div class="col">
<div class="card h-100">
<img src="Photo\mgims.jpeg" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">MGIMS</h4>
<p class="card-text">Entrance exam for MGIMS</p>
<a href="https://www.mgims.ac.in/" target="_blank"
class="btn btn-primary">See
Details..</a>
</div>
</div>
</div>
</div>
<div class="part5">
<div class="col">
<div class="card h-100">
<img src="Photo\cmc.jpeg" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">CMC-VELLORE</h4>
<p class="card-text">Entrance exam for CMCs</p>
<a href="https://admissions.cmcvellore.ac.in/"
target="_blank"
class="btn btn-primary">See Details..</a>
</div>
</div>
</div>
</div>
<div class="part6">
<div class="col">
<div class="card h-100">
<img src="Photo\eamcet.jpeg" class="card-img-top"
alt="...">

<div class="card-body">
<h4 class="card-title">EAMCET</h4>
<p class="card-text">Entrance exam for EAMCET</p>
<a href="https://eamcet.tsche.ac.in/" target="_blank"
class="btn btn-primary">See
Details..</a>
</div>
</div>
</div>
</div>
</div>
</>
</div>
<div class="exam3">
<fieldset class="exam3 engg">
<legend>BBA</legend>
<div class="exam3 enggbox1">
<div class="part1">
<div class="col">
<div class="card h-100">
<img src="Photo\nmims.jpeg" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">NMIMS</h4>
<p class="card-text">Entrance exam for NMIMS</p>
<a href="https://nmat.nmims.edu/" target="_blank"
class="btn btn-primary">See
Details..</a>
</div>
</div>
</div>
</div>
<div class="part2">
<div class="col">
<div class="card h-100">
<img src="Photo\cuet.jpeg" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">CUET</h4>
<p class="card-text">Entrance test for CU</p>
<a href="https://nta.ac.in/cuetexam" target="_blank"
class="btn btn-primary">See
Details..</a>
</div>
</div>
</div>
</div>
<div class="part3">
<div class="col">
<div class="card h-100">
<img src="Photo\set.jpeg" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">SET</h4>
<p class="card-text">Symbiosis Entrance Test</p>
<a href="https://www.set-test.org/" target="_blank"
class="btn btn-primary">See
Details..</a>
</div>
</div>
</div>

</div>
</div>
<div class="exam3 enggbox2">
<div class="part4">
<div class="col">
<div class="card h-100">
<img src="Photo\ipmat.jpeg" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">IPMAT</h4>
<p class="card-text">Aptitude test for Mangement</p>
<a href="https://www.iimidr.ac.in/academicprogrammes/five-year-integrated-programme-in-management-ipm/ipm-admissions-details/"
target="_blank" class="btn btn-primary">See
Details..</a>
</div>
</div>
</div>
</div>
<div class="part5">
<div class="col">
<div class="card h-100">
<img src="Photo\ipucet.jpeg" class="card-img-top"
alt="...">
<div class="card-body">
<h4 class="card-title">IPUCET</h4>
<p class="card-text">Entrance test for IP</p>
<a href="https://ipu.admissions.nic.in/"
target="_blank" class="btn btn-primary">See
Details..</a>
</div>
</div>
</div>
</div>
<div class="part6">
<div class="col">
<div class="card h-100">
<img src="Photo\npat.jpeg" class="card-img-top" alt="...">
<div class="card-body">
<h4 class="card-title">NPAT</h4>
<p class="card-text">Test for Programs After
Twelfth</p>
<a href="https://nmimsnpat.in/" target="_blank"
class="btn btn-primary">See
Details..</a>
</div>
</div>
</div>
</div>
</div>
</>
</div>
</div>
<footer>
<div class="last">

<p class="font-italic text-muted mb-0">&copy; Copyrights Company.com All rights
reserved.</p>
</div>
</footer>
</body>
</html>