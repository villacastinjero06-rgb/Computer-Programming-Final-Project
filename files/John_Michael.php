<?php
$requiredFile = "John_Michael.txt";
                "John_Michael.txt";
                "JM_docblock.php";
                "JM_GRADE.php";
                "JM_Login.php";
                "JM_multi_line.php";
                "JM_single_line.php";
                "JM_triangles.php";
                "JM_Variable.php";
                "JM_VOTE.php";
include 'guard.php';
include __DIR__ . '/../users.php';
$me = $_SESSION['adminuser'] ?? null;
if (!$me || !isset($users[$me]) || !in_array('', $users[$me]['files'])) {
    http_response_code(403);
    exit('Access denied');
}
?>
