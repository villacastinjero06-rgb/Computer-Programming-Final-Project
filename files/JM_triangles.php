<?php
    include __DIR__ . '/../users.php';
    $me = $_SESSION['adminuser'] ?? null;
    if (!$me || !isset($users[$me]) || !in_array('', $users[$me]['files'])) {
        http_response_code(403);
        exit('Access denied');
    }
?>
<?php 
    $a = 5;
    $b = 6;
    $c = 7;

    $perimeter = $a + $b + $c;
    $area = 0.5 * $a * $b;

    echo "the area of triangle = $area <br>";
    echo "the perimeter of triangle = $perimeter <br>";
?>