<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="number" placeholder="inventment amount" name="amount">
    <input type="number" placeholder="yearly interest rate" name="rate">
    <input type="number" placeholder="number of years" name="year">
    <button type="submit">Calculate</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $amount = $_POST['amount'];
    $rate = $_POST['rate'];
    $year = $_POST['year'];
    $result = $amount * ((1 + $rate / 100) * $year);
    echo 'future value after ' . $year . ' year is ' . $result;
}
?>
</body>
</html>
