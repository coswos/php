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
        $signs = ['+', '-', '*', '/'];

        foreach ($signs as $i => $sign) {
            static $index = 1;
            $answer = $_POST['answer' . $index];
            $value1 = $_POST['num' . $index * 2 - 1];
            $value2 = $_POST['num' . $index * 2];

            switch ($sign) {
                case '+':
                    $result = $value1 + $value2;
                    break;
                case '-':
                    $result = $value1 - $value2;
                    break;
                case '*':
                    $result = $value1 * $value2;
                    break;
                case '/':
                    $result = $value1 / $value2;
                    break;
                default:
                    $result = "Unsupported sign";
            }
            $index++;


            // check 2 digits after a comma
            if (is_float($result)) {
                $result = round($result, 2);
            }


            // add to negative numbers ()
            $value1 = $value1 < 0 ? "($value1)" : $value1;
            $value2 = $value2 < 0 ? "($value2)" : $value2;
            $result = $result < 0 ? "($result)" : $result;


            if ($result < 0 and substr($result, 1, -1) == $answer) {
                echo "<b>Congratulations</b>, this is the correct answer!<hr>";
            } elseif ($sign == '+') {
                echo "Your answer: $answer and it is <b>wrong</b>!<br>Correct solution:<br>$value1 + $value2 = $result <hr>";
            } elseif ($sign == '-') {
                echo "Your answer: $answer and it is <b>wrong</b>!<br>Correct solution:<br>$value1 - $value2 = $result<hr>";
            } elseif ($sign == '*') {
                echo "Your answer: $answer and it is <b>wrong</b>!<br>Correct solution:<br>$value1 * $value2 = $result<hr>";
            } elseif ($sign == '/') {
                echo "Your answer: $answer and it is <b>wrong</b>!<br>Correct solution:<br>$value1 / $value2 = $result<hr>";
            }
          
        }
    }
    ?>


</body>

</html>