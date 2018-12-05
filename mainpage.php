<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css2.css" />
<meta charset="utf-8">
<style>
.a1{
    width:70%;
    float:left;
    padding:15px;
}
</style>
<style type="text/css">
body 
{
background-image:url(Privateschool-58b5b2173df78cdcd8a980c7.jpg);
background-repeat:no-repeat;
background-attachment:fixed
}
</style>
</head>
<body class="body1">
<?php
$UserID = $_COOKIE["user"];

if($UserID == ''){
        echo"<script>alert('Not logged in!');</script>";
        echo "welcome "."$UserID";
	echo '<script>window.location.href="index.html";</script>';
}else{
        echo "<div><div style=\"float: left;\">Mainpage</div><div style=\"float: right\">Welcome, $UserID</div></div>";
}
?>
<br>
<div class="a1">
<a href=Application.php ><p>Application</p></a>
<a href=Applied_school.php ><p>Applied_school</p></a>
<a href=Test_scores.php ><p>Test_scores</p></a>
<a href=QS_ranking.php ><p>QS_ranking</p></a>
<a href=Regional_data.php ><p>Regional_data</p></a>
<a href=New_student.html ><p>New_student</a></p>
<form method="post" action="logout.php">
<input type="submit" value="logout">
</form>
</div>
</body>
</html>
