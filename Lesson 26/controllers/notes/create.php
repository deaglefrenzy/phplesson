<?php
$heading = "Create Note";

$config = require("config.php");

require "Validator.php";
/*
if (! Validator::email('jeff@ad.ss')) {
    dd('not valid email');
}
*/
$db = new Database($config['database']);
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $errors = [];

    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = "A body of no more than 1000 is required";
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body,user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}
require "views/notes/create.view.php";
