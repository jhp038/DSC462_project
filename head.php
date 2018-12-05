<!DOCTYPE html>
<html>
<head>
<style>
.a1{    
    width:50%;
    float:left;
    padding:15px; 
}
</style>
</head>
<body>

<?php
$UserID = $_COOKIE["user"];
if($UserID == ''){
        echo"<script>alert('Not logged in!');</script>";
        echo '<script>window.location.href="index.html";</script>';
}else{
        echo "<header><h1><div><div style=\"float: left;font-size:26px;\">$pagename</div><div style=\"float: right\">Welcome, $UserID</div></div></h1></header>";
        echo "<br>";
        echo "<br>";
}
?>
</body>
</html>


