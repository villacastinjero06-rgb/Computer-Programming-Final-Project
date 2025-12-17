<?php
    include __DIR__ . '/../users.php';
    $me = $_SESSION['adminuser'] ?? null;
    if (!$me || !isset($users[$me]) || !in_array('', $users[$me]['files'])) {
        http_response_code(403);
        exit('Access denied');
    }
?>
<?php
$name = "admin";
$password = "password";

if ($name == "admin" && $password == "password") {
    echo "Welcome Admin";
} 
else {
    echo "Cannot Login";
}
 
?>