<?php

//A list of example cities.
$cityList = array(
    'New York',
    'Los Angeles',
    'Paris',
    'Hong Kong',
    'Tokyo',
    'Rome',
    'London',
    'Dublin',
    'Boston',
    'Glasgow',
    'Brussels',
    'Munich',
    'Moscow'
);

//Get the search term from our "q" GET variable.
$q = isset($_GET['q']) ? trim($_GET['q']) : '';

//Array to hold results so that we can
//return them back to our Ajax function.
$results = array();

//Loop through our array of cities.
foreach($cityList as $city){

    //If the search term is present in our city name.
    if(stristr($city, $q)){
        //Add it to the results array.
        $results[] = $city;
    }
}

//Display the results in JSON format so that
//we can parse it with JavaScript.
echo json_encode($results);