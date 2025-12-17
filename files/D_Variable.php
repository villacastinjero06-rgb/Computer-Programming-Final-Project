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

    $sum =   $num_one +     $num_two;
    $Product =  $num_one *   $num_two;
    $Difference =   $num_one - $num_two;
    $Qutioent = $num_one / $num_two;

    echo "Two varibales in Sum: " . $sum . "<br>";
    echo "Two variables in Product: " . $Product . "<br>";
    echo "Two variables in Difference: " . $Difference . "<br>";
    echo "Two variables in Quotient: " . $Qutioent . "<br>";   
?>