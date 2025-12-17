<?php
/*Note from Jero:
This may or may not work, too many changes have been made. 
and I can't see if this has any effects, so this will be left 
here as a failswitch preferably.*/

/*The original purpose of this code is to check whether or not the
user that is logged-in has access to the file. You may see this in
other .php files due to the changes made. This will be left here as 
a reference and failsafe probably */

if (!isset($requiredFile)) {
    http_response_code(500);
    exit("Configuration error: $requiredFile not set");
}

session_start();
include __DIR__ . "/../users.php";

$me = $_SESSION["adminuser"] ?? null;
if (!$me || !isset($users[$me]) || !in_array($requiredFile, $users[$me]["files"])) {
    http_response_code(403);
    exit("Access denied");
}