<!DOCTYPE html>
<html>
<head>
    <title>PHP Exercise</title>
</head>
<body>
 
<?php

echo "<p>My name is Purrity Gwabeni. My favourite programming language is Python because it is great for web development'.</p>";


$num1 = 5;
$num2 = 25;
$sum = $num1 + $num2;
echo "<p>The sum of $num1 and $num2 is $sum.</p>";


echo "<p>Today is " . date("l, F d, Y") . ".</p>";
?>


<h1>
    <?php
    echo "Welcome to PHP Programming!";
    ?>
</h1>

<?php

$luckyNumber = rand(1, 100);
echo "<p>Your lucky number today is: $luckyNumber.</p>";
?>

</body>
</html>