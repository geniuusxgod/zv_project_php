<?php
    include('templates/partials/header.php');
    $user_object = new User();
    if(isset($_POST['user_registration'])){
        $nickname = $_POST['nick'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];


        if($password === $confirm_password){
            if($user_object->register($nickname, $email, $password)){
                echo "<p>Successful registration</p>";
            }else{
                echo "<p>Failed registration</p>";
            }
        }else{
            echo "<p>Passwords don't match</p>";
        }
    }
?>
<body>
<div class="spacer"></div>
    <main>
        <form action="" method="POST">
            <div class="circle"></div>
            <div class="registration-form-container">
                <h1 class="form-title">
                    R3G1STRAT10N
                </h1>
                <div class="form-field">
                    <input class="tx" type="text" name="nick" placeholder="N1CKN#M3">
                </div>
                <div class="form-field">
                    <input class="tx" type="email" name="email" placeholder="3-MAIL">
                </div>
                <div class="form-field">
                    <input class="tx" type="password" name="password" placeholder="P1N">
                </div>
                <div class="form-field">
                    <input class="tx" type="password" name="confirm_password" placeholder="C0NF1RM P1N">
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="checkbox">
                    <label class="label-checkbox" for="checkbox">Consent to the processing of personal data</label>
                </div>
                <div class="form-buttons">
                    <input class="button" type="submit" name="user_registration" value="R3G1STRAT10N">
                </div>
            </div>
        </form>
    </main>
    
    
    <?php
        include('templates/partials/footer.php');
    ?>