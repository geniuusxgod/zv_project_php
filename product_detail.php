<?php
    include('templates/partials/header.php');
    $product_id = $_GET['product_id'];
?>

<div class="spacer"></div>

<main>
    <div class="container mt-5">
        <?php
            $product = new Product();
            echo($product->get_product($product_id));
        ?>
    </div>
</main>

<?php
   
    include('templates/partials/footer.php');
?>