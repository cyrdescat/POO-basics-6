<?php

require_once "Speedometer.php";

echo "Convert 10 miles to km : ";
echo Speedometer::milesToKilometers(10);
echo "<br>" . PHP_EOL;

echo "Convert 10 km to miles : ";
echo Speedometer::kilometersToMiles(10);
echo "<br>" . PHP_EOL;