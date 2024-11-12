<?php
require("functions.php");
//require("router.php");

class Person
{
    public $name;
    public $age;
    public function breathe()
    {
        echo $this->name . " is breathing";
    }
}

$person = new Person();
$person->name = 'John Doe';
$person->age = '22';
//$person->breathe();

$dsn = "mysql:host=localhost;user=root;port=3306;dbname=myapp;charset=utf8mb4";

$pdo = new PDO($dsn);
$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

//dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['idpost'] . ". " . $post['title'] . "</li>";
}
