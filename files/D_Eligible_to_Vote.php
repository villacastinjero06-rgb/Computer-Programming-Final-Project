<?php
    include __DIR__ . '/../users.php';
    $me = $_SESSION['adminuser'] ?? null;
    if (!$me || !isset($users[$me]) || !in_array('', $users[$me]['files'])) {
        http_response_code(403);
        exit('Access denied');
    }
?>
<?php

    $age = 18; // Set the age
    // Check if the person is eligible to vote
    if ($age >= 18) { $eligible = true;} else { $eligible = false;}
    
    if ($eligible) {echo "THis person is 18 years old and eligible to vote." ;} else {
     echo "This person is not 18 years old and not eligible to vote." ; }

?>