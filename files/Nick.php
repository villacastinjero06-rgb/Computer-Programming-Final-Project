<?php
$requiredFile = "Nick.txt";
                "N_docblock.php";
                "N_grade.php";
                "N_login.php";
                "N_multi_line.php";
                "N_single_line.php";
                "N_test.php";
                "N_triangle.php";
                "N_variable.php";
                "N_vote.php";
include 'guard.php';
include __DIR__ . '/../users.php';
$me = $_SESSION['adminuser'] ?? null;
if (!$me || !isset($users[$me]) || !in_array('', $users[$me]['files'])) {
    http_response_code(403);
    exit('Access denied');
}
?>
