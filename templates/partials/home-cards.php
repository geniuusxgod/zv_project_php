<section class="kartochki">
        <div class="tag">
            <h1>New Arrivals</h1>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
            <?php
                $random_products = get_products_random()->fetchAll(); 
                foreach($random_products as $product) {
            ?>
                <div class="col-md-6">
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
                }
            ?>
        </div>
    </div>
</section>
