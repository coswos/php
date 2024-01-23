<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h2>Calculate</h2>
<?php $gen = random_int(-100, 100) ?>
    <!-- Форма сложения -->
    <form action="action.php" method="post">
        <input type="number" name="num1" value="<?php echo random_int(-100, 100) ?>">
        <span>+</span>
        <input type="number" name="num2" value="<?php echo random_int(-100, 100) ?>">
        <br>
        <label>Answer</label>
        <input type="text" name="answer">
        <input type="hidden" name="operation" value="add">
        <button type="submit">Send</button>
    </form> 

    <!-- Форма вычитания -->
    <!-- <form action="action.php" method="post">
        <label for="sub_value1">Value 1:</label>
        <input type="number" name="sub_value1" required>
        <label for="sub_value2">Value 2:</label>
        <input type="number" name="sub_value2" required>
        <input type="hidden" name="operation" value="sub">
        <button type="submit">Calculate (-)</button>
    </form> -->

    <!-- Аналогично для умножения и деления -->

</body>
</html>
