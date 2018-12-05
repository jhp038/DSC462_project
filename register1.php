<!DOCTYPE html>
<html lang="en">
<body>

<?php

$UserID = $_POST['user_name'];
$Pwd = $_POST['password'];
$Type=$_POST['type'];
$Per_code=$_POST['Per_code'];

    if($Type=='1' and $Per_code!='1000'){
	        echo"<script>alert('Invalid Permission code!');</script>";
        echo '<script>window.location.href="register1.html";</script>';
    }

    if($UserID == '' || $Pwd == ''){
	echo"<script>alert('Missing information!');</script>";
        echo '<script>window.location.href="register1.html";</script>';
    }else{
        // 创建连接
        require_once('./con.php');
        echo "<br>";
        $sql = 'insert into User1(UserID,Pwd,Type) VALUES(\''."$UserID".'\',\''."$Pwd".'\',\''."$Type".'\');';
        #echo "$sql";


        #echo "<br>";
        $result = $conn->query($sql);
        if ($result == '1') {
            echo"<script>alert('Register successfully!');</script>";
     	    echo '<script>window.location.href="index.html";</script>';
	} else {
	    echo"<script>alert('Register failed!');</script>";
            echo '<script>window.location.href="register1.html";</script>';
	
        }
    }
    
?>

</body>
</html>
