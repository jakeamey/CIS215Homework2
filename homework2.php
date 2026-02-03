<?php
//Author: Jacob Amey
//CIS 215: Homework 2
//02/01/2025
//jamey@csnlinux.genesee.edu/home/jamey/public_html/CIS215Homework2/homework2.php


//Add HTML boilerplate
echo "
<!DOCTYPE html>
<html lang = 'en'>
<head>
    <meta charset='UTF-8'>
    <meta name= 'viewport' content='width=device-width, initial-scale=1.0'>
    <title>Homework2/title>
</head>
<body>
";

//Display php greeting as html heading    
echo
"<h1>$greeting</h1>";

//Close HTML
echo 
"</body>
</html>";
?>


<?php
//set timezone
date_default_timezone_set('America/New_York');

//get current date and time
$currenthour = (int)date('H'); 

//determine greeting based on current hour
if ($currenthour >= 5 && $currenthour < 12) {
    $greeting = "Good Morning!";
    //If the time is greater than 5am and less than noon, display Good Morning

    } elseif ($currenthour >= 12 && $currenthour < 18) {
    $greeting = "Good Afternoon!";
    //If the time is greater than or equal to noon and less than 6, display Good Afternoon

    } else {
    $greeting = "Good Evening!";
    //If the time is anything other than the two above, display Good Evening
}   
?>