<?php
    include __DIR__ . '/../users.php';
    $me = $_SESSION['adminuser'] ?? null;
    if (!$me || !isset($users[$me]) || !in_array('', $users[$me]['files'])) {
        http_response_code(403);
        exit('Access denied');
    }
?>
<?php
   
   /* This is a multiline comment example
    program to add two numbers 
    Variables used - $x for first number,
    $y for second number */

    $x=10;
    $y=20;
    print "Total = ". $x+$y;
?>