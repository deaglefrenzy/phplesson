<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$db = App::resolve(Database::class);

$errors = [];

if (! Validator::email($email)) {
    $errors['email'] = 'Please provide valid email';
}

if (! Validator::string($password)) {
    $errors['password'] = 'Please provide valid password';
}

if (! empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query("select * from users where email=:email", [
    'email' => $email
])->find();

if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email
        ]);
        header('location: ?');
        exit();
    }
}

return view('session/create.view.php', [
    'errors' => [
        'email' => 'No matching email or password',
    ]
]);
