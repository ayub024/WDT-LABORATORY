<html>
<head>
<title>Welcome </title>
<style>
#footer {
Position: fixed;
padding: 10px 10px 0px 10px;
width: 100%; 
height: 40px;
left: 0;
bottom: 0;
background : #20b2aa;
color: black;
text-align: center;
}
</style>
</head>
<body>
<br/>
<?php
session_start();
$stime=$_SESSION['stime'];
echo "<p align='right'><b>".$_SESSION['stime']."</b></p>"; 
echo "<h4>Thank You ".$_SESSION['name'];
echo "<h4>Goodbye: ".$_SESSION['name'];
echo "<br/><h4>Login time: ".$_SESSION['stime'];
echo "<br/><h4>logout time: ".$_SESSION['etime'];
?>
<?php
if(isset($_POST['logout']))
{

$uname=$_POST["uname"]; date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'h:i:s A', time () ); session_start();
$_SESSION["stime"] = $_SESSION['stime'];
$_SESSION["etime"] = $currentTime; header('Location: Welcome.php');
}
?>
<div id = "footer">
<p align = "center"> &copy; N.USHASREE-- all rights -reserved </p>
</div>
</html>