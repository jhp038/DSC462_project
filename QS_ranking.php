<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booklist</title>
</head>
<body>
<p>search QS_ranking<p>
<form action='QS_ranking.php' method='get'>
<input type='hidden' name='search' value='1'>
column
<select name="column">
 <option value="Ranking">Ranking</option>
 <option value="Year">Year</option>
  <option value="School_name">School_name</option>
</select>
Keyword<input type='text' name='keyword' value=''>
<input type='submit' value='Submit'>
</form>
<?php
$pagename='QS_ranking';
        require_once('./head.php');

echo "zzzzzzz~!!!!!!";
$search=isset($_GET['search'])?intval($_GET['search']):0;
$keyword=isset($_GET['keyword'])?($_GET['keyword']):'';
$column=isset($_GET['column'])?($_GET['column']):'';

echo "$keyword";

$page=isset($_GET['page'])?intval($_GET['page']):0;
$page2 = $page + 1;
$page3=$page-1;
$num=10;
$offset = $num * $page;

        require_once('./con.php');

        echo "<br>";

if($search == 0){
        $sql = 'SELECT * FROM QS_ranking limit '."$offset".','."$num".';';
}else{
$sql = 'SELECT * FROM QS_ranking WHERE '."$column".' REGEXP \''."$keyword".'\' limit '."$offset".','."$num".';';

}
echo "$sql";
        echo "<br>";
	echo "<br>";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo"<table border=\"1\">";
            echo "<tr><td>School_name</td><td>Ranking</td><td> Year </td></tr>";
            while($row = $result->fetch_assoc()) {

                echo "<tr><td>" . $row["School_name"]. "</td><td> ".$row["Ranking"]."</td><td>".$row["Year"];
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
                echo "<input type='button' value='next page' onclick=location.href='QS_ranking.php?page=$page2$end'></input>";
}
        if($page>0 ){
                echo "<input type='button' value='previous page' onclick=location.href='QS_ranking.php?page=$page3$end'></input>";
}
?>
</form>
<br>
<br>
<input type='button' value='Logout' onclick=location.href='logout.php'></input>
<input type='button' value='Return to  main page' onclick=location.href='mainpage.php'></input>
</body>
</html>
