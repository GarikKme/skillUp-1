<?php
//checking
$firstNum = $_POST['number1'];
$secondNum = $_POST['number2'];
$result = 0;
$whatToDO = $_POST['calculate'];
switch ($whatToDO) {
    case '+':
        $result = $firstNum + $secondNum;
        break;
    case '-':
        $result = $firstNum - $secondNum;
        break;
    case '/':
        if($secondNum === '0'){
            $result = 0;
        } else {
            $result = $firstNum / $secondNum;
        }
        break;
    case '*':
        $result = $firstNum * $secondNum;
        break;
    default: {
        echo 'YOu entered wrong number';
    }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ответ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="task1">Task 1:
    <?php //Task 1
    $x = true;

    if($x == 1 ) {
        echo 1;
    }
    if($x == 2 ) {
        echo 2;
    }
    if($x == 3 ) {
        echo 3;
    } ?>
</div>
<div class="answer">Ответ - > <?= $firstNum . ' ' . $whatToDO . ' ' . $secondNum . ' = ' . $result?></div>
</body>
</html>
