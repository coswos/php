<?php

if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    // header('HTTP/1.1 405 Method Not Allowed');
    http_response_code(405);
    exit;
}

$email = trim($_POST['email']); // trim extra characters
$pass = md5($_POST['password']); // hash password


// check user existence 
$filename = "./storage/users/$email.json";
if (is_file($filename)) {
    http_response_code(302);
    exit('User already exists!');
}


// create user
$user = [
    'email' => $email,
    'password' => $pass
];


$contents = json_encode($user, JSON_PRETTY_PRINT);
file_put_contents($filename, $contents);
echo "User $email was created successfully!";
