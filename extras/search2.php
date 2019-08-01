<?php
mysqli_connect("localhost", "root", "") or die(mysqli_connect_errno());
mysql_select_db("bookrent") or die(mysql_error());
$search = $_POST["name"];

$players = mysql_query("SELECT author FROM books WHERE author LIKE '%{$search}%'");
while($player = mysql_fetch_array($players)) {
    echo "<div>" . $players["author"] . "</div>";
}
?>