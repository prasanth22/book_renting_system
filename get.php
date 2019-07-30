<?php
session_start();
if(!isset($_SESSION['user']))
       header("location: index.php?Message=Login To Continue");
?>

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
                  <div style="font-weight:800;border:none;padding:15px;"> The Book Shop </div>
                  <ul>
                      <li> <a href="Product.php?value=entrance%20exam"> Entrance Exam </a> </li>
                      <li> <a href="Product.php?value=Literature%20and%20Fiction"> Literature & Fiction </a> </li>
                      <li> <a href="Product.php?value=Academic%20and%20Professional"> Academic & Professional </a> </li>
                      <li> <a href="Product.php?value=Biographies%20and%20Auto%20Biographies"> Biographies & Auto Biographies </a> </li>
                      <li> <a href="Product.php?value=Children%20and%20Teens"> Children & Teens </a> </li>
                      <li> <a href="Product.php?value=Regional%20Books"> Regional Books </a> </li>
                      <li> <a href="Product.php?value=Business%20and%20Management"> Business & Management </a> </li>
                      <li> <a href="Product.php?value=Health%20and%20Cooking"> Health and Cooking </a> </li>

                  </ul>
 </div>
 <div class="col-sm-9"    style="padding-top: 20px;">   
  <div class="bookContainer" id="book01">
   <a href="book_description.php?b_id=3">
    <div class="bookImage" id="img01"><img class="block-center img-responsive" src="img/books/LIT-19.jpg"></div>
   </a>
    <p class="bookTitle">
      "Revolution 2020" <br/> Chetan Bagat
    </p>
   <div class="bookPrice"><span>&#8377;</span>10/day</div>
  </div>
  
  <div class="bookContainer" id="book01">
   <a href="book_description.php?b_id=5">
    <div class="bookImage" id="img01"><img class="block-center img-responsive" src="img/books/LIT-33.jpg"></div>
   </a>
	<p class="bookTitle">
      "Harry potter & The goblate of fire" <br/> J.K.Rowling
    </p>
    <div class="bookPrice"><span>&#8377;</span>15/day</div>
  </div>
  
  <div class="bookContainer" id="book01">
   <a href="book_description.php?b_id=6">
    <div class="bookImage" id="img01"><img class="block-center img-responsive" src="img/books/LIT-24.jpg"></div>
   </a>	
    <p class="bookTitle">
      "Your Dreams Are Mine Now" <br/> Ravinder singh
    </p>
    <div class="bookPrice"><span>&#8377;</span>15/day</div>
  </div>
  
  <div class="bookContainer" id="book01">
   <a href="book_description.php?b_id=7">
    <div class="bookImage" id="img01"><img class="block-center img-responsive" src="img/books/LIT-15.jpg"></div>
   </a>
    <p class="bookTitle">
      "Till The Last Breath" <br/> Durjoy Datta
    </p>
    <div class="bookPrice"><span>&#8377;</span>10/day</div>
  </div>
  
  <div class="bookContainer" id="book01">
   <a href="book_description.php?b_id=2">
    <div class="bookImage" id="img01"><img class="block-center img-responsive" src="img/books/BIO-8.jpg"></div>
   </a>
    <p class="bookTitle">
      "The Story Of My Experiments With Truth" <br/> M.K.Gandhi
    </p>
    <div class="bookPrice"><span>&#8377;</span>20/day</div>
  </div>
  
  <div class="bookContainer" id="book01">
   <a href="book_description.php?b_id=8">
    <div class="bookImage" id="img01"><img class="block-center img-responsive" src="img/books/BIO-6.jpg"></div>
   </a>
    <p class="bookTitle">
      "I Am Malala " <br/> malala yousufzai
    </p>
    <div class="bookPrice"><span>&#8377;</span>15/day</div>
  </div>
  
  <div class="bookContainer" id="book01">
   <a href="book_description.php?b_id=9">
    <div class="bookImage" id="img01"><img class="block-center img-responsive" src="img/books/BIO-1.jpg"></div>
   </a>
    <p class="bookTitle">
      "Wings Of Fire " <br/> A.P.J.Abdul Kalam
    </p>
    <div class="bookPrice"><span>&#8377;</span>20/day</div>
  </div>
  
  <div class="bookContainer" id="book01">
   <a href="book_description.php?b_id=10">
    <div class="bookImage" id="img01"><img class="block-center img-responsive" src="img/books/LIT-21.jpg"></div>
   </a>
    <p class="bookTitle">
      "LOL" <br/> Rahul Srinivasan
    </p>
    <div class="bookPrice"><span>&#8377;</span>10/day</div>
  </div> 
 </div>
 <div class="container">
 <?php include("footer.php") ?>
 </div>
</body>

</html>	