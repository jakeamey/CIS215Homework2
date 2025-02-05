<?php
//CSNLinux Link sftp://jamey@csnlinux.genesee.edu/home/jamey/public_html/GitHub/CIS215Homework2
?>
<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Time Based Output</title>
</head>
<body>
</body>
</html>";

?>
<?php date_default_timezone_set("Americas/New_York");
$hour = date("H");
if ($hour <12 )
{
    echo "<h1>Good Morning</h1>";
} elseif ($hour < 18){
    echo "<h1>Good Afternoon</h1>";
}else {
    echo "<h1>Good Evening</h1>";
}

echo "</body></html>";
?>