<?php

//require_once 'calc.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action="calc.php" method="post" class="form">
    <h2>Калькулятор</h2>
    <div class="form-group">
        <input type="number" placeholder="Enter number one" name="number1" required class="form-control">
        <input type="number" placeholder="Enter number two" name="number2" required class="form-control">
        <input type="text" placeholder="What to do with numbers (+,-,*,/)?" data-action name="calculate" required
               class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Calculate</button>
</form>


<script>
    const form = document.querySelector('.form');
    const action = document.querySelector('[data-action]');
    const btn = document.querySelector('.btn');
    const answer = document.queryCommandValue('.answer');
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        if (action.value === '*' || action.value === '/' || action.value === '+' || action.value === '-') {
            form.submit();
        } else {
            alert('Введите корректное действие с числами!')
            action.value = '';
        }
    })

</script>
</body>
</html>
