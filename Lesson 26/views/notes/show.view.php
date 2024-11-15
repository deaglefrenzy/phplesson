<?php
require("views/partials/head.php");
require("views/partials/nav.php");
require("views/partials/banner.php");
?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p><a href="?notes">go back...</a></p>
        <br>
        <p><?= htmlspecialchars($note['body']); ?></p>
    </div>
</main>
<?php
require("views/partials/footer.php");
?>