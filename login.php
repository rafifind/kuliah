<?php
session_start();

$username_valid = 'unnes';
$password_valid = '123';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $username_valid && $password === $password_valid) {
    $_SESSION['login'][] = [
        'username' => $username,
        'password' => $password,
        'login_at' => date('Y-m-d H:i:s'),
    ];

    echo 'Selamat Datang : ' . $username . ', anda sudah login sebanyak: ' . count($_SESSION['login']) . ' kali';
    echo '<br>';
    echo '<a href="logout.php">logout</a>';
    echo '<pre>';
    var_dump($_SESSION['login']);
    echo '</pre>';
} else {
    echo 'Username atau Password Salah';
}