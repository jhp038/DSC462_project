<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booklist</title>
</head>
<body>
<p>search Test_scores<p>
<form action='Test_scores.php' method='get'>
<input type='hidden' name='search' value='1'>
column
<select name="column">
 <option value="Student_number">Student_number</option>
 <option value="GRE_V">GRE_V</option>
 <option value="GRE_Q">GRE_Q</option>
 <option value="GRE_W">GRE_W</option>
 <option value="GRE_subject">GRE_subject</option>
  <option value="GPA">GPA</option>
</select>
Keyword<input type='text' name='keyword' value=''>
<input type='submit' value='Submit'>
</form>
<?php
$pagename='Test_scores';
        require_once('./head.php');
echo "zzzzzzz~!!!!!!";
$search=isset($_GET['search'])?intval($_GET['search']):0;
$keyword=isset($_GET['keyword'])?($_GET['keyword']):'';
$column=isset($_GET['column'])?($_GET['column']):'';

echo "$keyword";

$page=isset($_GET['page'])?intval($_GET['page']):0;
$page2 = $page + 1;
$num=10;
$offset = $num * $page;

        require_once('./con.php');
if($search == 0){
        echo "<br>";
        $sql = 'SELECT * FROM Test_scores limit '."$offset".','."$num".';';
}else{
$sql = 'SELECT * FROM Test_scores WHERE '."$column".' REGEXP \''."$keyword".'\' limit '."$offset".','."$num".';';
}
        echo "$sql";
        echo "<br>";
	echo "<br>";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo"<table border=\"1\">";
            echo "<tr><td>Student number</td><td>GRE_V</td><td> GRE_Q </td><td>GRE_W</td><td>GRE_subject</td><td>GPA</td></tr>";
            while($row = $result->fetch_assoc()) {

                echo "";
                echo "<tr><td>" . $row["Student_number"]. "</td><td> ".$row["GRE_V"]."</td><td> ".$row["GRE_Q"];
		echo "</td><td> ".$row["GRE_W"]."</td><td>  ".$row["GRE_subject"]."</td><td>  ".$row["GPA"];
		echo "</td></tr>";
               
                //echo "<br>";
            }
		echo "</table>";
        }
        if($search==1){
        $end="&search="."$search"."&column="."$column"."&keyword="."$keyword";
}else{
        $end="";
}
        if($result->num_rows == 10) {
                echo "<input type='button' value='next page' onclick=location.href='Test_scores.php?page=$page2$end'></input>";
}
        if($page>0 ){
                echo "<input type='button' value='previous page' onclick=location.href='Test_scores.php?page=$page3$end'></input>";
}
?>
</form>
<br>
<br>
<input type='button' value='Logout' onclick=location.href='logout.php'></input>
<input type='button' value='Return to  main page' onclick=location.href='mainpage.php'></input>
</body>
</html>
