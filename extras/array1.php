<?php include("dbconnect.php")?>
<?php 
$sql = "SELECT book_name FROM books";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $a[] = $row["book_name"];
    }
} else {
    echo "0 results";
}
echo '<script>';
 echo' var countries = [  ';
foreach ($a as $val){ 
    echo '"'.$val.'",'; 
}
echo '];';
echo '</script>';
?>