<?php
$ext_weather = 'http://www.aeroklubhb.cz/wpscripts/weather.php';
$ext_file = @file_get_contents($ext_weather);
echo $ext_file;