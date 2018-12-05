<!DOCTYPE html>
<html lang="en">
<body>

<?php
$UserID = $_POST['user_name'];
$UserPwd = $_POST['password'];
$Type=$_POST['Type'];

echo "<br>";
    if($UserID == '' || $UserPwd == ''){
	echo"<script>alert('Missing information!');</script>";
	echo '<script>window.location.href="index.html";</script>';
    }else{
        // 创建连接
        require_once('./con.php');

        // 检测连接
        #echo "$UserID"."$UserPwd";
        #echo "<br>";
        $sql = 'SELECT UserID,Pwd,Type FROM User1 where UserID=\''."$UserID".'\';';
        #echo "$sql";
        #echo "<br>";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($row["Pwd"] == $UserPwd and $Type==$row["Type"]){
                    setcookie("user", "$UserID", time()+3600);
		    echo"<script>alert('login successfully!');</script>";
       		    echo '<script>window.location.href="mainpage.php";</script>';
                }else {
		    echo"<br>";
                    echo"<script>alert('login failed!');</script>";
                    echo '<script>window.location.href="index.html";</script>';
			
                    }

                    //echo "UserID: " . $row["UserID"]. " ||  Rating: ".$row["Rating"];
                    //echo "  || Location: ".$row["Location"]." ||  Country: ".$row["Country"];
            }
        }else{
                    echo"<script>alert('User name not found!');</script>";
                    echo '<script>window.location.href="index.html";</script>';
        }
    }
?>
<br>

</body>
</html>
