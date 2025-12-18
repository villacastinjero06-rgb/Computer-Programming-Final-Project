<?php
$requiredFile = "David.txt"; 
                "D_Admin_Login.php";
                "D_docblock.php";
                "D_Eligible_to_Vote.php";
                "D_Grade.php";
                "D_multi_line.php";
                "D_Perimeter_of_a_Triangle.php";
                "D_single_line.php";
                "D_Variable.php";
include 'guard.php';
include __DIR__ . '/../users.php';
$me = $_SESSION['adminuser'] ?? null;
if ($users == null || !$me || !isset($users[$me]) || !in_array($requiredFile, $users[$me]['files'])) {
    http_response_code(403);
    exit('Access denied');
}
?>
