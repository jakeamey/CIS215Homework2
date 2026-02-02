<?php




?>

<?php
//set timezone
date_default_timezone_set('America/New_York');

//get current date and time
$currenthour = (int)date('G'); 

//determine greeting based on current hour
if ($currenthour >= 5 && $currenthour < 12) {
    $greeting = "Good Morning!";
} elseif ($currenthour >= 12 && $currenthour < 18) {
    $greeting = "Good Afternoon!";
} else {
    $greeting = "Good Evening!";
}   
?>