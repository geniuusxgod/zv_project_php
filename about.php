<?php
        include_once('templates/partials/header.php');
    ?>
    <div class="spacer"></div>
    
    <section id="about">
    <?php
        $about = new About();
        echo($about->about());
    ?>

    </section>
    
    <?php
        include_once('templates/partials/footer.php');
    ?>