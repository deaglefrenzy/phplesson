<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (! Validator::email($email)) {
    $errors['email'] = 'Please provide valid email';
}

if (! Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide valid password (7-255)';
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email= :email', [
    'email' => $email
])->find();

if ($user) {
    header('location: ?');
    exit();
} else {
    $db->query('INSERT INTO users(email,password) VALUES (:email,:password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: ?');
    exit();
}
