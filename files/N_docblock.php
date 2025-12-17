<?php
    include __DIR__ . '/../users.php';
    $me = $_SESSION['adminuser'] ?? null;
    if (!$me || !isset($users[$me]) || !in_array('', $users[$me]['files'])) {
        http_response_code(403);
        exit('Access denied');
    }
?>
<?php
    /**
     * This function adds two numbers.
     * 
     * @param int $a First number
     * @param int $b Second number
     * @return int Sum of $a and $b
     */
    function add($a, $b){
        return $a + $b;
    }
?>