<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Syntax, Variables, Data Types -->

<?php
$hour = date('h');
?>
<p>
    <?php
    if($hour < 6 || $hour > 18) {
        echo "<b>Night Time</b>";
    } else {
        echo "<i>Day Time</i>";
    }
    ?>
</p>

<!-- Template Start(can use looping and switch) -->
<p>
<?php if($hour < 6 || $hour >18): ?>
    <b>Night Time</b>
<?php else: ?>
    <i>Day Time</i>
<?php endif ?>
</p>
<!-- Template End(can use looping and switch) -->
 
</body>
</html>

<?php
$var = "abc";
echo var_dump($var);
echo '<br>';

//Context Scope Start
$name = "Bob";

function hello() {
    global $name;
    echo $name;
}
hello();
//Context Scope End

//check have? or not have? Start
echo '<br>';
echo isset($name1); //Empty

$name = "Bob";

echo isset($name);
//check have? or not have? End

//Constant Start(Auto Global can use everywhere)
echo '<br>';
define("PI", 3.14);
echo PI;
//Constant End


?>