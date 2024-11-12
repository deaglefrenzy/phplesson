<body>
    <?php
    foreach ($hasil as $data):
        echo "<li>" . $data['nama'] . " " . $data['alamat'] . " " . $data['telepon'] . "</li>";
    endforeach;
    ?>
</body>