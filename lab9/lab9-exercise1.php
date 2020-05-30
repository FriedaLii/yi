<html>
<head>
    <title>Exercise 1</title>
</head>
<body>
<h1>Regular HTML section (outside &lt;?php ... ?&gt; tags)</h1>
<p>You can type regular HTML here and it will show up</p>

<h1>PHP section (inside &lt;?php ... ?&gt; tags)</h1>
<?php
//this is a php comment IN tags (will not appear)


//e1-1
/*echo "This was output using PHP";

echo "<br>"; //notice we must echo tags in php.
*/

//e1-2
//echo "This page was generated: " . date("M dS, Y");

//e1-4
//echo "This page was generated: " . date("M dS, Y") . "<hr/>";

//e1-5
//echo "This page was generated: " . date("M dS, Y")  "<hr/>";
        /*Parse error: syntax error, unexpected '"<hr/>"' (T_CONSTANT_ENCAPSED_STRING), expecting ';' or ','
        in D:\htdocs\PhpstormProjects\test1\lab9\lab9-exercise1.php on line 27*/

//e1-6
//echo "This page was generated: " . date("M dS, Y") . "<hr/>";

//e1-7 1-8
$date = date("M dS, Y");
echo "This page was generated: " . $date . "<hr/>";


//e1-9
$date = date("l, M dS, Y, H:i:s");
echo "This page was generated: " . $date . "<hr/>";

//e1-10
$remaining = 365 - date("z");
echo "There are ". $remaining . " days left in the year."."<hr/>";

//e1-11 leap year: 被400整除/被4整除且不被100整除
/*$year = date("Y");
$totalDays = ($year % 400 == 0)? 366: ($year % 4 == 0 && $year % 100 != 0)? 366: 365;
$remaining = $totalDays - date("z");
echo "There are ". $remaining . " days left in the year.";
*/
?>
</body>
</html>