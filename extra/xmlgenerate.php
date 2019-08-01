<?php
   $channel = array('title' => "wings of fire",
      'url' => 'http://localhost/bookstore/book_description.php?b_id=9');
   
   print "<pages>\n";
   
   foreach ($channel as $element => $content) {
      print " <$element>";
      print htmlentities($content);
      print "</$element>\n";
   }
   
   print "</pages>";
?>
