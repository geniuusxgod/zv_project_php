<?php
include('partials/header.php');
?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
              
                <?php
                    $_SESSION = array();

                    // Удаляем сессионные cookies
                    if (isset($_COOKIE[session_name()])) {
                        setcookie(session_name(), '', time()-42000, '/');
                    }
                    
                    // Уничтожаем сессию
                    session_destroy();
                    
                    // Перенаправляем пользователя на страницу входа
                    header('Location: login.php');
                    exit;
                ?>
            </div>
        </div>
    </section> 
</main>
<?php
    include('templates/partials/footer.php');
?>