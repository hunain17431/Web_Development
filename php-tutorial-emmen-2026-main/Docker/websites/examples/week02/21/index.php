<pre><code>
<?php

 $month     = date("m");

switch ($month) {
    case 1: $monthname = 'January';
    case 2: $monthname = 'February';
    case 3: $monthname = 'March';
    case 4: $monthname = 'April'; 
    case 5: $monthname = 'May'; 
    case 6: $monthname = 'June';
    case 7: $monthname = 'July'; 
    case 8: $monthname = 'August'; 
    case 9: $monthname = 'September'; 
    case 10: $monthname = 'October'; 
    case 11: $monthname = 'November'; 
    case 12: $monthname = 'December'; 
    default: $monthname = 'hello'; 
}

$monthname2  = match ($month) {
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December',
    default => 'Error',
};

 print "Current month = $monthname";
 print "Current month = $monthname2";


?>
</code></pre>