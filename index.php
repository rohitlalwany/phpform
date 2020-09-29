<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>


<?php
    //<!-- POST | GET Method use for form submit -->
    //<!-- https://www.pratilipi.com/index.php?sub=Maths -->
    //<!-- https://www.pratilipi.com/index.php?sub=Science -->
    
    
?>
<table >
    <tr>
        <th>First Name</th>
        <th>City</th>
    </tr>

    <?php
$servername = "localhost"; //127.0.0.1
$db_name = "phpform";
$db_user = "root";
$db_password = "";    

$conn = new mysqli($servername,$db_user,$db_password);
$conn->select_db($db_name);

if ($conn->connect_error){
    echo $conn->connect_error;
    exit;
}

$query = "SELECT * FROM users";
$result = $conn->query($query);
$count = $result->num_rows;
if ($count>0){
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['city']."</td>";
        echo "</tr>";
    }
}

?>

</table>


<form method="GET" action="./backend.php">
    <table>
        <tr>
            <td><label>Firstname :</label></td>
            <td><input type="text" name="firstname"></td>
        </tr>
        <tr>
            <td><label>City :</label></td>
            <td><input type="text" name="city"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Next">
                <input type="reset" name="reset" value="Clear">
            </td>
        </tr>
    </table>
</form>

</body>
</html>