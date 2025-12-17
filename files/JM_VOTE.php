<?php
    include __DIR__ . '/../users.php';
    $me = $_SESSION['adminuser'] ?? null;
    if (!$me || !isset($users[$me]) || !in_array('', $users[$me]['files'])) {
        http_response_code(403);
        exit('Access denied');
    }
?>
<?php

$age = 17;

if ($age >= 18) { 
echo "you are eligible to vote.";
 } else { 
echo "you are not eligible for voting.";
 } 
?>