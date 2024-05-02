<?php
    include("templates/partials/header.php");
?>
    <div class="spacer"></div>
    <section id="bottoms">
        <div class="tag">
            <h1>Bottoms</h1>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
            <?php
                $products = get_products_all()->fetchAll();
                $count = 0;
                foreach($products as $product) {
                    if(isset($product["category_id"]) && $product["category_id"] == 2) {
            ?>
                <div class="col-md-4">
                    <div class="product">
                    <a href="#">
                        <div class="image-product">
                            <img src="<?php echo $product['img']; ?>" alt="<?php echo $product["product_name"]; ?>" style="max-width: 100%; height: auto; max-height: 400px;">
                        </div>
                    </a>
                        <div class="info">
                            <h2><?php echo $product["product_name"]; ?></h2>
                            <h3><?php echo $product["price"]; ?><small>$</small></h3>
                        </div>
                    </div>
                </div>
            <?php
                        $count++;
                        if($count % 3 == 0) {
                            echo '</div><div class="row text-center">';
                        }
                    }
                }
            ?>
        </div>
    </div>

    </section>
    <?php
    include("templates/partials/footer.php");
?>