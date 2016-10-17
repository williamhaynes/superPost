<!DOCTYPE html>
<head>

</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: hype_
 * Date: 17/10/2016
 * Time: 13:48
 */

    $forename = $_POST["forename"];
    $surname = $_POST["surname"];
    $gender = $_POST["gender"];
    $mainsuperhero = $_POST["mainsuperhero"];
    echo "<p>First Name: " . $forename . "</p> <p>Surname: " . $surname . "</p> <p>Gender: " . $gender . "</p> <p>Super Power: " . $mainsuperhero;
?>
</body>
</html>
