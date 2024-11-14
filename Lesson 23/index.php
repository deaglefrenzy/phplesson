<?php
require("functions.php");
require("Database.php");
require("router.php");
require("Response.php");

/*
$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE idpost = ?";
$posts = $db->query($query, [$id])->fetch();

$query = "SELECT * FROM posts WHERE idpost = :id";
$posts = $db->query($query, [':id' => $id])->fetch();

//dd($posts);

/*foreach ($posts as $post) {
    echo "<li>" . $post['idpost'] . ". " . $post['title'] . "</li>";
}
    */
