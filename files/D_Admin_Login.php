<?php
    include __DIR__ . '/../users.php';
    $me = $_SESSION['adminuser'] ?? null;
    if (!$me || !isset($users[$me]) || !in_array('', $users[$me]['files'])) {
        http_response_code(403);
        exit('Access denied');
    }
?>
<?php
// Set the username and password
$username = "David";
$password = "password";
// Check if the username and password match
if ($username == $password) {
    echo "Welcome Admin";
} else {
    echo "Cannot Login";
}
?>