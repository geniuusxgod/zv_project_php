<?php
        include('templates/partials/header.php');
    ?>
    <div class="spacer"></div>
    <main>
        <div class="thank">
            <h1 class="nadpis">THANK YOU!!!</h1>
            <h1 class="nadpis">THANK YOU!!!</h1>
            <h1 class="nadpis">THANK YOU!!!</h1>
            <h1 class="nadpis">THANK YOU!!!</h1>
        </div>
    </main>
    
    <?php
        $contact_object = new Contact();
        $contact_object->insert();
        include('templates/partials/footer.php');
    ?>