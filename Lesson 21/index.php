<?php
require("functions.php");
//require("router.php");
require("Database.php");
$config = require("config.php");
$db = new Database($config['database']);
$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE idpost = ?";
$posts = $db->query($query, [$id])->fetch();

$query = "SELECT * FROM posts WHERE idpost = :id";
$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);

/*foreach ($posts as $post) {
    echo "<li>" . $post['idpost'] . ". " . $post['title'] . "</li>";
}
    */
