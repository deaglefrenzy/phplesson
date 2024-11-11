<?= "hello world" ?>

<?php
$kotas = ["makassar", "jakarta", "surabaya"];
foreach ($kotas as $kota):
    echo "<li>$kota</li>";
endforeach;
?>