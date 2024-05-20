<?php
    include('templates/partials/header.php');
?>
<div class="spacer"></div>
<section id="jackets">
    <div class="tag">
        <h1>Jackets</h1>
    </div>
    <div class="container mt-5">
        <div class="row text-center">
            <?php
                $jackets = new Categories();
                echo ($jackets->display_products_by_category(1));
            ?>
        </div>
    </div>
</section>
<?php
    include('templates/partials/footer.php');
?>