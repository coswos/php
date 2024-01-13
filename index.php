<?php

$nested_array = [
    "ключ2" => [
        "подключ1" => "my_value1",
        "подключ2" => "my_value2"
    ],
];

echo '<pre>structure => <br> <b> ';
var_dump($nested_array);
echo '</b> </pre>';


foreach ($nested_array as $key => $val) {
    if (is_array($val)) {
        echo '<h2> $val is array</h2>';
        foreach ($val as $new) {
            echo '<div>$new into array $val: ', "<b>$new</b>", '</div>';
        }
    }
}
