<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <h2>Calculate</h2>
    <?php $signs = ['+', '-', '*', '/',];

    for ($i = 1; $i <= count($signs); $i++) :
        $sign = $signs[$i - 1];
        static $index = 1; ?>


        <?php for ($j = 0; $j < 3; $j++) : ?>
            <form action="action.php" method="post">
                <input type="number" name="num<?php echo $index++ ?>" value="<?php echo random_int(-100, 100) ?>">
                <span><?php echo $sign ?></span>
                <input type="number" name="num<?php echo $index++ ?>" value="<?php echo random_int(-100, 100) ?>">
                <span>=</span>
                <input type="text" name="answer<?php echo $i ?>" required>
                <input type="hidden" name="operation<?php echo $i ?>" value="<?php echo $sign ?>">
                <hr>
            <?php endfor ?>
        <?php endfor ?>


        <button type="submit">Send</button>
            </form>


</body>

</html>