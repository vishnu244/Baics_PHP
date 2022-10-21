

<?php
echo "Today is " . date("Y/m/d") ."\n";
echo "Today is " . date("Y.m.d") ."\n";
echo "Today is " . date("Y-m-d") ."\n";
echo "Today is " . date("l")."\n";
date_default_timezone_set("India/kolkata");

echo "The time is " . date("h:i:sa");

?>

<!-- 
The PHP date() function is used to format a date and/or a time.

Here are some characters that are commonly used for dates:

d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the week
Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting. -->