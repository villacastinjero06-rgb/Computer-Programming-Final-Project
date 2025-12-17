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

    $SUM = $num_one + $num_two;
    $PRODUCT = $num_one * $num_two;
    $DIFFERENCE = $num_one - $num_two;
    $QUOTIENT = $num_one / $num_two;

    echo "The sum of $num_one and $num_two is: $SUM". "<br>";
    echo "The product of $num_one and $num_two is: $PRODUCT". "<br>";
    echo "The diffrence of $num_one and $num_two is: $DIFFERENCE". "<br>";
    echo "The quotient $num_one and $num_two is: $QUOTIENT". "<br>";

?>