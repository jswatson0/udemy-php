<!DOCTYPE html>
<html>
<body>
<?php
$password = 'password';

if ($password == 'jason') {
	echo 'this is the correct password <br> <br>';
} else {
	echo 'Wrong password bra <br> <br>';
}

$age = 21;

if ($age >= 21) {
    echo 'You can get drunk in the U.S and U.K';
} else if ($age >= 18) {
    echo 'You\'re old enough to get drunk in U.K';
} else {
    echo 'You can\'t get drunk anywhere';
}

?>
</body>
</html>
