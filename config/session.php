<?php
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 86400,
        'path'     => '/',
        'httponly' => true,
        'secure'   => false,
        'samesite' => 'Strict',
    ]);
    session_start();
}
