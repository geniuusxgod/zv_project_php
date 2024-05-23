<?php
    include('templates/partials/header.php');
    if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
        // Пользователь уже авторизован, ничего не делаем
    } else {
        // Пользователь не авторизован, оставляем страницу login.php
    }
?>
<body>
<div class="spacer"></div>
    <main>
        <form action="" method="POST">
            <div class="circle"></div>
            <div class="registration-form-container">
                <h1 class="form-title">
                    L0G1N
                </h1>
                <div class="form-field">
                    <input class="tx" type="text" name="username" placeholder="N1CKN#M3 or 3MA1L">
                </div>
                <div class="form-field">
                    <input class="tx" type="password" name="password" placeholder="P1N">
                </div>
                
                <div class="form-buttons">
                    <input class="button" type="submit" name="user_login" value="L0G1N">
                </div>
            </div>
        </form>
        <?php
            if(isset($_POST['user_login'])){
                $user_name = $_POST['username'];
                $password = $_POST['password']; 
                       
                $user_object = new User();

                $login_success = $user_object->login($user_name,$password);
                if($login_success == true){
                    header('Location: admin.php');
                    die;
                }else{
                    echo 'Nesprávne meno alebo heslo';
                }

            }
        ?>
    </main>
    
    
    <?php
        include('templates/partials/footer.php');
    ?>