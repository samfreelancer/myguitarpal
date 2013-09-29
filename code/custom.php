<?php


define('DB_NAME', 'db165814_launch');



/** MySQL database username */

define('DB_USER', '1clk_wp_mzB6ann');



/** MySQL database password */

define('DB_PASSWORD', 'VLgbHTSi');



/** MySQL hostname */

define('DB_HOST', $_ENV{DATABASE_SERVER});

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$select = "SELECT *
FROM launch_wp_options
WHERE option_name = 'template'
OR option_name = 'stylesheet'
OR option_name = 'current_theme'";
$update = "UPDATE launch_wp_options SET option_value = 'canvas' WHERE option_name = 'template'"; 
$update1 = "UPDATE launch_wp_options SET option_value = 'canvas-Guitarpal' WHERE option_name = 'stylesheet'";
$update2 = "UPDATE launch_wp_options SET option_value = 'canvas' WHERE option_name = 'current_theme'";
$result = $link->query($update1) or die("Error in the consult.." . mysqli_error($link));

//display information:
echo "<pre>";
//while($row = mysqli_fetch_array($result)) {
//    print_r($row);
//}
echo "</pre>";
?>