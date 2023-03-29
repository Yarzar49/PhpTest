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

//Strings and Arrays start

$name = "Alice";
$role = "Web Developer";
$company = "Acme Inc";

//variable can write in double quote
echo "$name, $role, $company";

//default function and method
echo strlen($name);

echo substr($name,1,1);

echo str_replace("i","c",$name);

//Array

$users = array("Alice", "Bob");

$fruits = ["Apple", "Orange"];

print_r($fruits); //value

var_dump($fruits); // data type and value

//Associative array

$user = [
    "name" => "alice",
    "age" => "22",
];

print_r($user);
echo $user["name"];

$users = [
    $user = [
        "name" => "alice",
        "age" => "22",
    ],
    $user = [
        "name" => "alice",
        "age" => "22",
    ],
    $user = [
        "name" => "alice",
        "age" => "22",
    ],   

];

print_r($users);
echo $users[0] ["name"];

//Array destructuring

$user = ["Alice", 22];

[$name, $age] = $user;

echo $name;

$user = ["name" => "Alice", "age" => 22];
["name"=>$name, "age" =>$age] =$user;

//Array Spread...
$nums1 = [1, 2];
$nums2 = [...$nums1, 3];

print_r($nums2);

//array count
$nums = [1, 2, 3, 4];

echo count($nums);

//check have? or have not?
$users = ["alice", "bob"];

echo is_array($users);

//check value

echo in_array("bob",$users);

echo array_search("alice", $users); //return index

$users = ["alice", "bob"];

array_push($users,"tom");
array_pop($users);

array_unshift($users, "Foo");
array_shift($users);

//array_splice
$users = ["tom", "bob", "alice"];
$result = array_splice($users,1,1);

$user = ["name" => "alice", "age" => 22];

$keys = array_keys($user);
$values = array_values($user);

//sorting sort(ascen) rsort(descen)

$users = ["tom" => 23, "bob" =>22];
sort($users);

rsort($users);

//ksort()  for index
//krsort() for index

//explode and implode

$input = "A quick brown fox";
$arr = explode(" ", $input);

$str =implode(" ", $arr);

//Strings and array end

//Operators and Control Structures Start

// /!= or <> not equal operator

//Spaceship Operator

echo 3<=>5; //-1
echo 5<=>5;//0
echo 5<=>3;//1

//Logical Operator

//Ternary operator (Conditional expression)

$name = "Alice";
echo $name? $name : "Unkown";
echo $name?: "Unkown";

echo isset($name)? $name : "Unkown";

//Null Coalescing assignment Operator (Conditional expression) ??=

$result = "Alice";
$result ??= $name;

//else if statement
$score = '60';

if ($score >= 90) {
    $grade = "A";
} elseif ($score >= 80) {
    $grade = "B";
} elseif ($score >= 70) {
    $grade = "C";
} elseif ($score >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}


//Switch

$day = date("D");

switch ($day) {
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    case "Thursday":
        echo "Today is Thursday";
        break;
    case "Friday":
        echo "Today is Friday";
        break;
    default:
        echo "It's the weekend!";
        break;
}

$result = match($day) {
    "Monday", "Tuesday", "Wednesday","Thursday", "Friday" => "Weekday",
    default => "Weekend",
};

echo $result;

//looping

//while
 $nums = [12, 42, -2, 8, 621];

 $i = 0;

$result = 0;

while($i < count($nums)) {
    if($nums[$i] < 0) {
        $i++;
        continue;
    }
    $result  += $nums[$i];
    $i++;
}

echo $result; 

$user = ["alice" => 98, "bob" => 95];
$result = [];

foreach($user as $name=>$point) {
    $result[] = $name;
}

print_r($result);

print_r( array_keys($user));

//Operations and Control Structures End

//Functions start
echo '<br>';
$a = [5, 2, 3, 4, 5];


$r = array_reduce($a, function($carry, $item) {
    echo $carry;
    echo '<br>';
    return $carry + $item;
});

echo $r;
 
//default parameter

function add($a, $b = 1) {
    echo $a+ $b;
}

add(1);
//Rest parameter
function sum($a, ...$b) {
    print_r($b);
}

sum(1, 2, 3, 4, 5, 6, 7);

//Type Hinting

function arrayAdd(Array $arr)  {
    return array_sum($arr);
} 

arrayAdd([1, 2, 3]);

//Return type hinting

function arrayAdd1(Array $arr): string  {
    return array_sum($arr);
} 

$r1 = arrayAdd1([1, 2, 3]);

var_dump($r1);

//Union Type(more than one type hint)

function price(int | float $n) {
    return "Price is  \$$n";
}

echo price(3.1); // Price is $3.1
echo price(2); 

//Pass by Value, Pass by Reference

$name = "Alice";
function hello1(&$n) { //the whole variable
    $n = "BOB";
    echo $n;
}

hello1($name);
echo $name;

//Variable function

function add2($a, $b) {
    echo $a + $b;
}

$name = "add2";
$name(1, 2);

//Function Expression (Nameless Functin or Anonymous function)

$nums = [1, 2, 3, 4];
$result = array_map(function($n) {
    return $n *2;
},$nums); //callback function

print_r($result);

$two = function($n) {
    echo $n * 2;
};

$two(2);

//use statement in function expression
$name = "Alice";
$hello = function() use ($name){
    echo "Hello $name";
};

$hello(); 

//arrow function
$twp = fn ($n) => $n * 2;

//can use direct global variable
$x = 3;
$add = fn ($y) => $x + $y;

echo add(3);

//Named Arguments

function profile($name, $email, $age) {
    echo "$name ($age) @ $email";
}

profile(age: 23, name: "Bob", email: ".com");













?>