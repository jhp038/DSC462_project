<!DOCTYPE html>
<html>
 <head>
  <title>apply result</title>
 </head>
 <meta charset="UTF-8">
 <body>



<?php
$UserID = $_COOKIE["user"];
if($UserID == ''){
        echo"<script>alert('Not logged in!');</script>";
        echo '<script>window.location.href="index.html";</script>';
}
$Student_number='null';
$Program= $_POST['Program'];
$Status= $_POST['Status'];
$Degree= $_POST['Degree'];
$Date= $_POST['Date'];
$Result= $_POST['Result'];
$School= $_POST['School'];
$GRE_V= $_POST['GRE_V'];
$GRE_Q= $_POST['GRE_Q'];
$GRE_W= $_POST['GRE_W'];
$GRE_subject=$_POST['GRE_subject'];
$GPA= $_POST['GPA'];
echo "$Degree";
        // 创建连接
        require_once('./con.php');

        // 检测连接
        echo "<br>";
        $sql = 'insert into Application(Student_number,Program,Status,Degree,Date,Result,School) VALUES(\''."$Student_number".'\',\''."$Program".'\',\''."$Status".'\',\''."$Degree".'\',\''."$Date".'\',\''."$Result".'\',\''."$School".'\');';
        echo "$sql";
        echo "<br>";
        $sql1 = 'insert into Test_scores(Student_number,GRE_V,GRE_Q,GRE_W,GRE_subject,GPA) VALUES(\''."$Student_number".'\',\''."$GRE_V".'\',\''."$GRE_Q".'\',\''."$GRE_W".'\',\''."$GRE_subject".'\',\''."$GPA".'\');';
        echo "$sql1";
	$result = $conn->query($sql);
	$result1 = $conn->query($sql1);
	            echo"$result"."$result1";


   	if($result=='1' and $result1=='1'){
	    echo"<script>alert('Application and Test_scores applied successfully!');</script>";
		echo"$sql"."$sql1";      	    
	echo '<script>window.location.href="mainpage.php";</script>';
	} else{

            if ($result == '1') {
		echo"<script>alert('$sql1');</script>";
                echo '<script>window.location.href="New_student.html";</script>';
            }
        

            if ($result1 == '1') {
		echo"<script>alert('$sql');</script>";
		echo '<script>window.location.href="New_student.html";</script>';
            } else {
		echo"<script>alert('$sql');</script>";
	        echo '<script>window.location.href="New_student.html";</script>';        
	    }

	}


?>
<br>
<input type="button" value="back to main page" onclick="location.href='mainpage.php'">


 </body>
</html>

