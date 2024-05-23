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
    <div>
          <h3>Contact us</h3>
          <form id="contact" action="thankyou.php" method="POST">
            <input type="text" placeholder="N4ME" name="name" required><br>
            <input type="email" placeholder="3MAI1" name="email" required><br>
            <textarea placeholder="M3SS#GE" name="message"></textarea><br>
            <input type="checkbox" name="acceptance" value="1" required>
            <label>I agree to the processing of my personal data.</label><br>
            <input type="submit" name="contact_submitted"value="S3ND" >
          </form>
        </div>
    
    <?php
        include_once('templates/partials/footer.php');
    ?>