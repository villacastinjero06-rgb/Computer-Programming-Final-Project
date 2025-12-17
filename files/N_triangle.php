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

$s + $perimeter / 2;
$area = sqrt($s *($s - $a) * ($s - $b) * ($s - $c));

echo "Perimeter of trianle = " . $perimeter . "<br>";
echo "Area of triangle = " . $area;

?>