<?php include("dbconnect.php")?>
<?php

if(isset($_POST['submit']))
{
  if($_POST['submit']=="login")
  { 
        $username=$_POST['login_username'];
        $password=$_POST['login_password'];
        $query = "SELECT * from users where UserName ='$username' AND Password='$password'";
        $result = mysqli_query($conn,$query)or die(mysql_error());
        if(mysqli_num_rows($result) > 0)
        {
             $row = mysqli_fetch_assoc($result);
             $_SESSION['user']=$row['UserName'];
             print'
                <script type="text/javascript">alert("successfully logged in!!!");</script>
                  ';
        }
        else
        {    print'
              <script type="text/javascript">alert("Incorrect Username Or Password!!");</script>
                  ';
        }
  }
  else if($_POST['submit']=="register")
  {
        $username=$_POST['register_username'];
        $password=$_POST['register_password'];
        $query="select * from users where UserName = '$username'";
        $result=mysqli_query($conn,$query) or die(mysql_error());
        if(mysqli_num_rows($result)>0)
        {   
               print'
               <script type="text/javascript">alert("username is taken");</script>
                    ';

        }
        else
        {
          $query ="INSERT INTO users VALUES ('','$username','$password')";
          $result=mysqli_query($conn,$query);
          print'
                <script type="text/javascript">
                 alert("Successfully Registered!!!");
                </script>
               ';
        }
  }
}
?>

<nav>
 <div>
  <ul>
	<a href="index.php"><li>Home</li></a>
	<a href="#"><li>About</li></a>
	<a href="get.php"><li>Get a Book</li></a>
	<a href="rent.php"><li>Rent a Book</li></a>
	<a href="#"><li>Contact</li></a>
 
  <ul class="nav navbar-nav navbar-right">
        <?php
        if(!isset($_SESSION['user']))
          {
            echo'
            <li>
                <button type="button" id="login_button" data-toggle="modal" data-target="#login">Login</button>
                  <div id="login" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-center">Login Form</h4>
                            </div>
                            <div class="modal-body">
                                          <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8">
                                              <div class="form-group">
                                                  <label class="sr-only" for="username">Username</label>
                                                  <input type="text" name="login_username" class="form-control" placeholder="Username" required>
                                              </div>
                                              <div class="form-group">
                                                  <label class="sr-only" for="password">Password</label>
                                                  <input type="password" name="login_password" class="form-control"  placeholder="Password" required>
                                              </div>
                                              <div class="form-group">
                                                  <button type="submit" class="btn btn-primary" name="submit" value="login">
                                                      Sign in
                                                  </button>
                                              </div>
                                          </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                  </div>
            </li>
            <li>
              <button type="button" id="register_button" data-toggle="modal" data-target="#register">Sign Up</button>
                <div id="register" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title text-center">Member Registration Form</h4>
                          </div>
                          <div class="modal-body">
                                        <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8">
                                            <div class="form-group">
                                                <label class="sr-only" for="username">Username</label>
                                                <input type="text" name="register_username" class="form-control" placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="password">Password</label>
                                                <input type="password" name="register_password" class="form-control"  placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" name="submit" value="register">
                                                    Sign Up
                                                </button>
                                            </div>
                                        </form>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
                </div>
            </li>';
          } 
        else
          {   echo' <a href="#" ><li> Hello '.$_SESSION['user'].'</li></a>
                     <a href="cart.php" ><li> Cart</li> </a>  
                     <a href="destroy.php" ><li> LogOut </li> </a>';
               
          }
?>

          </ul>
     </ul>
</div>	 
</nav>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>