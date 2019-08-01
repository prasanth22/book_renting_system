
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style></style>
<link rel="stylesheet" type="text/css" href="styles.css">
<?php
include("array1.php")
?>
</head>     
<body>

<h2>Autocomplete</h2>

<p>Start typing:</p>

<!--Make sure the form has the autocomplete function switched off:-->
<form autocomplete="off" action="/action_page.php">
  <div class="autocomplete" style="width:300px;">
    <input id="myInput" type="text" name="myCountry" placeholder="Book Name">
  </div>
  <input type="submit">
</form>

<script src="javascript.js"></script>

</body>
</html>
