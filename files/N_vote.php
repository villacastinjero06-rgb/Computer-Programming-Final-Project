<?php
    include __DIR__ . '/../users.php';
    $me = $_SESSION['adminuser'] ?? null;
    if (!$me || !isset($users[$me]) || !in_array('', $users[$me]['files'])) {
        http_response_code(403);
        exit('Access denied');
    }
?>
<?php
include __DIR__ . '/../users.php';
$me = $_SESSION['adminuser'] ?? null;
if (!$me || !isset($users[$me]) || !in_array('Nick.txt', $users[$me]['files'])) {
    http_response_code(403);
    exit('Access denied');
}
$age = 19;
$isVoter = true;

if ($age > 18 ) {
    echo "eligible <br>";
}
?>