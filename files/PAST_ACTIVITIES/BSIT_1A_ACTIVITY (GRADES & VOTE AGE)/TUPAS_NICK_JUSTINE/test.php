<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tupas</title>
</head>
<body>
<h2>ENTER YOUR GRADES</h2>

<form method="post">
    <input type="Number" name="grades" placeholder="Enter grades" require>
    <button type="Submit" name="check">Check Grade</button>
</form>

<?php
if (isset($_POST["check"])) {
    $score = $_POST["grades"];

    if ($score >= 90 && $score <= 100) {
        echo "<p class='grade A'>Grade A</p>";
    }
    else if ($score >= 80 && $score <= 99) {
        echo "<p class='grade B'>Grade B</p>";
    }
    else if ($score >= 75 && $score <=79) {
        echo "<p class='grade C'>Grade C</p>";
    }
    else if ($score < 75) {
        echo "<p class='grade F'>Grade F</p>";

    }
    else {
        echo "<p class='grade invalid'>Invalid</p>";
    }

} 

?>




</body>
</html>