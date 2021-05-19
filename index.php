<?php
use App\Main;
require_once "vendor/autoload.php";

$test = new Main();
$test->initNumbers();
//echo $test->binarySearch(1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computer Guess Number</title>
</head>
<body>
<!--"<button onclick='return confirm("chuan chua?")'>Check</button>";-->
<?php echo $test->computerGuess(61) ?>
</body>
</html>
