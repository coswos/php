<?php

if ('POST' !== $_SERVER['REQUEST_METHOD']){
    // header('HTTP/1.1 405 Method Not Allowed');
    http_response_code(405);
    exit;
} else {
    echo '<div style="margin: 0; display: flex; align-items: center; justify-content: center; height: 100vh;"><b>
    All is OK</b>
    </div>';
}