<?php
    include __DIR__ . '/../users.php';
    $me = $_SESSION['adminuser'] ?? null;
    if (!$me || !isset($users[$me]) || !in_array('', $users[$me]['files'])) {
        http_response_code(403);
        exit('Access denied');
    }
?>
<?php
$num_one = 35.2;
$num_two = 25;

$sum = $num_one + $num_two;

$products = $num_one * $num_two;

$difference = $num_one - $num_two;

$quotient = $num_one / $num_two;

echo "the sum  =  $sum <Br> the products =  $products <br> the difference = $difference <br> the quotient = $quotient <br>";

echo "the value of num_one = $num_one <br> the value of num_two $num_two";

if ($num_one < $num_two) {
    echo "ambot" . "<br>";
}

elseif ($num_one > $num_two) {
    echo "haha";
}
else {
    echo "hehe" . "<br>";
}




?>