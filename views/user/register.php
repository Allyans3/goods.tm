<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include ROOT . '/views/layouts/head.php'; ?>
        <link rel="stylesheet" href="/template/css/register.css">
        <title>Registration</title>
    </head>
    <body>

        <a href="/">
            <div class="back">
                <i class="fas fa-chevron-left"></i>
                <p>Back to Home</p>
            </div>
        </a>

        <div class="d1">

        </div>

        <div class="register-box">
            <?php if($result): ?>
                <p>You've signed up!</p>
            <?php else: ?>
            <form class="register-form" action="#" method="post">
                <h2>Register Form</h2>
                <?php if(isset($errors) && is_array($errors)):  ?>
                    <ul>
                        <?php foreach ($errors as $error):  ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach;  ?>
                    </ul>
                <?php endif;  ?>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" name="reg_name" placeholder="Username" maxlength="32" required autocomplete="username" value="<?php echo $reg_name ?>">
                </div>
                <div class="textbox">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="reg_email" placeholder="E-mail" required autocomplete="email" value="<?php echo $reg_email ?>">
                </div>
                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="reg_pass" placeholder="Password" required autocomplete="new-password">
                </div>
                <div class="textbox">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="reg_conf_pass" placeholder="Confirm password" required
                           autocomplete="new-password">
                </div>
                <div class="linebox">
                    <div class="rem-me">
                        <input id="ckb1" type="checkbox" name="remember-me">
                        <label for="ckb1">Remember me</label>
                    </div>
                    <a href="#">Forgot Password?</a>
                </div>
                <input class="login-btn" type="submit" name="reg-btn" value="Register">
                <div class="text-center">
                    <span class="txt">or sign up using</span>
                </div>
                <div class="reg-social">
                    <a href="" style="background: red;"><i class="fab fa-google"></i></a>
                    <a href="" style="background: #3b5998;"><i class="fab fa-facebook-f"></i></a>
                    <a href="" style="background: #1da1f2;"><i class="fab fa-twitter"></i></a>
                </div>
            </form>
            <?php endif; ?>
        </div>

    </body>
</html>