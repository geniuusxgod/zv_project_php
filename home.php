<?php
        include('templates/partials/header.php');
    ?>
    <div class="spacer"></div>
    <div class="black-friday">
        <a href="#" id="alert">BL<span style="color: red;">4</span>CK F<span style="color: red;">#</span>CK<span style="color: red;">1</span>NG FR<span style="color: red;">1</span>D<span style="color: red;">4</span>Y </a>
    </div>
    
    <section>
        <div class="container-image">
            <div class="image">
                <?php
                    echo slider();
                ?>
            </div>
        </div>
    </section>
    <div class="spacer"></div>
    <section class="kartochki">
        <div class="tag">
            <h1>New Arrivals</h1>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
            <?php
                echo display_random_products();
            ?>
        </div>
    </div>
    </section>
    
    <?php
        include('templates/partials/footer.php');
    ?> 