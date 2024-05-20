<?php
    include("templates/partials/header.php");
?>
    <div class="spacer"></div>
    <section id="hoodies">
        <div class="tag">
            <h1>Hoodies</h1>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
            <?php
                echo display_products_by_category(3);
            ?>
        </div>
    </div>

    </section>
    <?php
    include("templates/partials/footer.php");
?>