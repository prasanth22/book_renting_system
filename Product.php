
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Books">
    <meta name="author" content="prasanth">
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Rent Books</title>
    <link href="css/my.css" rel="stylesheet">
</head>
<body>
 <h1>Book Renting System</h1>
 <?php include("navbar.php") ?>

 <div class="col-md-3 col-lg-3" id="category" style="padding-top:20px; color:purple">
                  <div style="font-weight:800;border:none;padding:15px;"> Catagories </div>
                  <ul>
                      <li> <a href="Product.php?value=entrance%20exam"> Entrance Exam </a> </li>
                      <li> <a href="Product.php?value=Literature and Fiction"> Literature & Fiction </a> </li>
                      <li> <a href="Product.php?value=Academic%20and%20Professional"> Academic & Professional </a> </li>
                      <li> <a href="Product.php?value=Biographies and Auto Biographies"> Biographies & Auto Biographies </a> </li>
                      <li> <a href="Product.php?value=Children%20and%20Teens"> Children & Teens </a> </li>
                      <li> <a href="Product.php?value=Regional%20Books"> Regional Books </a> </li>
                      <li> <a href="Product.php?value=Business%20and%20Management"> Business & Management </a> </li>
                      <li> <a href="Product.php?value=Health%20and%20Cooking"> Health and Cooking </a> </li>

                  </ul>
 </div>
 <div class="col-sm-9"    style="padding-top: 20px;">

 <?php
    $gener = $_GET['value'];
    $query = "SELECT * FROM books WHERE gener = '$gener'";
    $result = mysqli_query ($conn,$query) or die(mysql_error());
    if(mysqli_num_rows($result) > 0) 
        {   
            while($row = mysqli_fetch_assoc($result)) 
            {            	
		        $path = "uploads/".$row['cover_page'];
				echo '
				     <div class="bookContainer" id="book01">
                      <a href="book_description.php?b_id='.$row['book_id'].'">
                           <div class="bookImage" id="img01"><img class="block-center img-responsive" src="'.$path.'"></div>
                      </a>
                      <p class="bookTitle">
                            '.$row['book_name'].' <br/> '.$row['author'].'
                      </p>
                      <div class="bookPrice"><span>&#8377;</span>'.$row['cost'].'/day</div>
                      </div>
				     ';
			}
		}	 
?>

 </div>

 <div class="container">
 <?php include("footer.php") ?>
 </div>
 
</body>
</html>	