<!-- calculate.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Result</title>
</head>

<body>
    <h2>Calculation Result</h2>

    <?php
    // Проверяем, что данные были отправлены методом POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Получаем значения из формы
        $value1 = $_POST['num1'];
        $value2 = $_POST['num2'];


        // Получаем операцию
        $operation = $_POST['operation'];

        // Выполняем вычисление в зависимости от операции
        switch ($operation) {
            case 'add':
                $result = $value1 + $value2;
                break;
            case 'sub':
                $result = $value1 - $value2;
                break;
                // Аналогично для умножения и деления
            default:
                $result = "Unsupported operation";
        }

        // add to negative numbers ()
        $value1 = $value1 < 0 ? "($value1)" : $value1;
        $value2 = $value2 < 0 ? "($value2)" : $value2;
        $result = $result < 0 ? "($result)" : $result;

        if (is_bool($result)) {
            $result = round($result, 2);
        }


        // check user answer
        $user_answer = $_POST['answer'];
        $user_answer = $user_answer < 0 ? "($user_answer)" : $user_answer;
        if ($result == $user_answer) {
            echo "Good job!";
        } else {
            echo "Your answer is $user_answer and it is wrong!<br>";
            echo "Correct solution:<br>$value1 + $value2 = $result";
        }
    }
    ?>

</body>

</html>