<html>
<head>
<title> Choose List Cookies </title>
<style> 
#footer {
Position: fixed;
left:0;
bottom:0;
padding: 20px 20px 20px 10px; bottom: 0;
width: 100%;
/* Height of the footer*/ 
height: 40px;
color:white;
background:green;
text align:center;
}
</style>
</head>
<body>
<form action="displaycookie.php" method="POST"/>
<input type="submit" name="submit" value="List Cookies"/>
</form>
<?php
setcookie("Name","Banu Satyala");
setcookie("user","srit");
setcookie("Address","Anantapur");
?>
<div id = "footer">
<p align = "center"> &copy; N.Ushasree all rights --reserved </p>
</div>
</body>
</html>