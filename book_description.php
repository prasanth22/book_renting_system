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
 
 <div class="container">
 <?php
    $BID=$_GET['b_id'];
    $query = "SELECT * FROM books WHERE book_id='$BID'";
    $result = mysqli_query ($conn,$query)or die(mysql_error());

        if(mysqli_num_rows($result) > 0) 
        {   
            while($row = mysqli_fetch_assoc($result)) 
            {
				
			   $path="uploads/".$row['cover_page'];
			   echo '
                      <div class="container-fluid" id="books">
                          <div class="row">
                              <div class="col-sm-10 col-md-4">
							     <img class=" img-responsive" src="'.$path.'" height="400px" style="padding:20px;">
							  </div>
							   <div class="col-sm-10 col-md-6">
							     <h2 style="color:purple"> '. $row["book_name"] . '</h2>
								  <span style="color:#00B9F5;">
                                       #'.$row["author"].'&nbsp &nbsp #'.$row["gener"].'
                                  </span>
                                  <hr>            
							  </div>
	                          <br><br><br>
                                <a id="buyLink" href="#" class="btn btn-lg btn-danger" style="padding:15px;color:white;text-decoration:none;"> 
                                    ADD TO CART for Rs '.$row["cost"] .'<br> 
                               </a>
							</div>  
						</div>  
                        <hr>  '  ;        
				
               echo '
                   <div class="container-fluid" id="description"> 
                     <pre style="background:inherit;border:none;">
                       BOOK          '.$row["book_name"].' <hr> 
                       AUTHOR        '.$row["author"].' <hr> 
                       GENER         '.$row["gener"].' <hr>
                       DESCRIPTION   '.$row["description"].' <hr>
                       COST          '.$row["cost"].' <hr>
                     </pre>
                   </div>
                ';
			}
        }
    echo '</div>';
  ?>
 
  </div>
 
 <div class="container">
 <?php include("footer.php") ?>
 </div>

</body>
</html>	