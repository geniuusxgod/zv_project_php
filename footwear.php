<?php
    include('templates/partials/header.php');
?>
    <div class="spacer"></div>
    <section id="footwear">
        <div class="tag">
            <h1>Footwear</h1>
        </div>
        <div class="container mt-5">
        <div class="row text-center">
        <?php
                echo display_products_by_category(4);
            ?>
        </div>
    </div>

    </section>
    <?php
    include('templates/partials/footer.php');
?>