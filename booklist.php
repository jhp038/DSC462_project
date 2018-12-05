<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booklist</title>
</head>
<body>
<a>User Book List Page</a><br><br>

<?php


        require_once('./con.php');

        echo "<br>";
        $sql = 'SELECT * FROM Bid where UserID=\''."$UserID".'\';';
        echo "$sql";
        echo "<br>";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

                echo "";
                echo "UserID: " . $row["UserID"]. " ||  BookID: ".$row["ItemID"]." || BookName: ".$row["Name"]."  || ApplyTime: ".$row["BidTime"]." ||  Amount: ".$row["Amount"]." || Confirmed:  ".$row["Confirmed"];
                echo "<br>";
                //echo "<br>";
            }
        }
    
?>
</form>
</body>
</html>
