<?php include("dbconnect.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP / Ajax search example.</title>
</head>
<body>
    <!-- search box -->
    <input type="text" id="search_box"><br>
    <!-- search button -->
    <input type="button" id="search_button" value="Search">
    <!-- the div that will contain our search results -->
    <div id="search_results" style="padding:5px;"></div>

<!-- include the JQuery library -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    //Add a click listener to our search_button.
    $('#search_button').click(function(){
        //If the search_button was clicked,
        //get the value from the search_box.
        var search_term = $('#search_box').val().trim();
        $.ajax({
            url: 'search3.php',
            data: {
                q: search_term
            },
            success: function(returnData){
                //Blank the search_results div.
                $('#search_results').html('');
                //Parse the result that we got back from search.php
                var results = JSON.parse(returnData);
                //Loop through the results array and append it to
                //the search_results div.
                $.each(results, function(key, value){
                    $('#search_results').append(value + '<br>');
                });
                //If the results array is empty, display a
                //message saying that no results were found.
                if(results.length == 0){
                    $('#search_results').html('No results found!');
                }
            }
        });
    });
</script>
</body>
</html>