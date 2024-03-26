<?php set_time_limit(20);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>
<?php
$array = array("puppy", "kitten", "peacock", "lion", "wolf", "wolf", "penguin", "macau", "orca", "otter");
?>
<center>MENU
<form method="post" action="">
<table border="1">
<tr>
<th>1</th>
<th>Display the contents using each statement</th>
<th><input type="submit" name="display1"></th>
</tr>
<tr>
<th>2</th>
<th>Display the array in sorted order</th>
<th><input type="submit" name="display2"></th>
</tr>
<tr>
<th>3</th>
<th>Display the array without the duplicate elements</th>
<th><input type="submit" name="display3"></th>
</tr>
<tr>
<th>4</th>
<th>Remove the last element and display</th>
<th><input type="submit" name="display4"></th>
</tr>
<tr>
<th>5</th>
<th>Display the array in reverse order</th>
<th><input type="submit" name="display5"></th>
</tr>
<tr>
<th>6</th>
<th>Search for an element in the given array</th>
<th><input type="submit" name="display6"></th>
</tr>
</table>
</form>
</center>
<?php
if (isset($_POST["display1"])) { echo "<center>";
echo "<h3>Display the contents using each statement</h3>"; foreach ($array as $value) {
echo $value; echo "<br>";
}
echo "</center>";
}
if (isset($_POST["display2"])) { echo "<center>";
echo "<h3>Display the array in sorted order</h3>"; sort($array);
foreach ($array as $value) { echo $value;
echo "<br>";
}
echo "</center>";
}
if (isset($_POST["display3"])) { echo "<center>";
echo "<h3>Display the array without the duplicate elements</h3>";
$unique=array_unique($array); foreach ($unique as $value) {
echo $value; echo "<br>";
}
echo "</center>";
}
if (isset($_POST["display4"])) { 
    echo "<center>";
    echo "<h3>Remove the last element and display</h3>"; 
    array_pop($array);
    foreach ($array as $value) { 
        echo $value;
        echo "<br>";
    }
    echo "</center>";
}
if (isset($_POST["display5"])) { 
    echo "<center>";
    echo "<h3>Display the array in reverse order</h3>"; 
    $reversedArray = array_reverse($array);
    foreach ($reversedArray as $value) { 
        echo $value;
        echo "<br>";
    }
    echo "</center>";
}
if (isset($_POST["display6"])) { echo "<center>";
echo "<h3>Search for an element in the given array</h3>";
?>
<form method="post">
<input type="text" name="search">
<input type="submit" name="btmsearch">
</form>
<?php
echo "</center>";
}
if(isset($_POST["btmsearch"]))
{
echo "<center>";
echo "<h3>Result</h3>";
$valu=$_POST["search"];
$key=array_search($valu,$array,true); print "The ".$valu." is found in ".$key;
}
?>
</body>
</html>
