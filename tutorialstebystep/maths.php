<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="maths.php" method="post">

<label for="">x:</label>

<input type="text" name="x">

<label for="">y:</label>

<input type="text" name="y">

<label for="">z:</label>

<input type="text" name="z">
<input type="submit" value="total">


    </form>
</body>
</html>

<?php
$x = $_POST['x'];
$y = $_POST['y'];
$y = $_POST['z'];
$total = null;
/* absolute value function
$total = abs($x);
*/
/*  round function
$total = round($x);
*/
/* we can always round down with the floor function
$total = floor($x);
*/
/*we can always round up with the ceil function
$total = ceil($x);
*/
//$total =pi()
//$total =max()
//$total =max()
//$total =rand()

$total = pi($x, $y, $z);

echo $total;

?>