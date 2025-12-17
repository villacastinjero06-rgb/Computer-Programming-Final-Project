<?php
    include __DIR__ . '/../users.php';
    $me = $_SESSION['adminuser'] ?? null;
    if (!$me || !isset($users[$me]) || !in_array('', $users[$me]['files'])) {
        http_response_code(403);
        exit('Access denied');
    }
?>
<?php

$score = 95;

if ($score >= 90 && $score <= 100) { 
echo "Grade: A"; 
} elseif ($score >= 80 && $score <= 89) 
{
 echo "Grade: B"; 
} elseif ($score >= 75 && $score <= 79)
 { 
echo "Grade: С"; 
} elseif ($score < 75) {
 echo "Grade: F"; 
echo "Invalid score."; 
} 
?>