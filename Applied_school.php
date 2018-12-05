<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booklist</title>
</head>
<body>
<p>search Applied_school<p>
<form action='Applied_school.php' method='get'>
<input type='hidden' name='search' value='1'>
column
<select name="column">
　<option value="NumofApp">NumofApp</option>
　<option value="State">State</option>
  <option value="School">School</option>
</select>
Keyword<input type='text' name='keyword' value=''>
<input type='submit' value='Submit'>
</form>

<?php
$pagename='Applied_school';
        require_once('./head.php');

$page=isset($_GET['page'])?intval($_GET['page']):0;
$page2 = $page + 1;
$page3=$page-1;
$num=10;
$offset = $num * $page;

echo "zzzzzzz~!!!!!!";
$search=isset($_GET['search'])?intval($_GET['search']):0;
$keyword=isset($_GET['keyword'])?($_GET['keyword']):'';
$column=isset($_GET['column'])?($_GET['column']):'';

echo "$keyword";



        require_once('./con.php');
if($search == 0){
        echo "<br>";
        $sql = 'SELECT * FROM Applied_school limit '."$offset".','."$num".';';
}else{
 $sql = 'SELECT * FROM Applied_school WHERE '."$column".' REGEXP \''."$keyword".'\' limit '."$offset".','."$num".';';

}        
echo "$sql";
        echo "<br>";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
	    echo"<table border=\"1\">";
            echo "<tr><td>School</td><td>NumofApp</td><td> State  </td></tr>";
		while($row = $result->fetch_assoc()) {

                echo "";
                echo "<tr><td> " . $row["School"]. "</td><td> ".$row["NumofApp"]."</td><td> ".$row["State"]."</td></tr>";
                echo "<br>";
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
                echo "<input type='button' value='next page' onclick=location.href='Applied_school.php?page=$page2$end'></input>";
}
        if($page>0 ){
                echo "<input type='button' value='previous page' onclick=location.href='Applied_schoolphp?page=$page3$end'></input>";
}
?>
</form>
<br>
<br>
<input type='button' value='Logout' onclick=location.href='logout.php'></input>
<input type='button' value='Return to  main page' onclick=location.href='mainpage.php'></input>
</body>
</html>
