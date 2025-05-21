<?php
require_once("settings.php");
$conn = mysqli_connect($host,$user,$pwd,$sql_db);
if($conn){
    echo "<p>Connection successfully!</p>";
    mysqli_close($conn);
    echo"<button><a href='index.php'>Go to Home Page</a></button>";
}
else{
    echo"<p>Unable to connect to the database.</p>";
}
?>