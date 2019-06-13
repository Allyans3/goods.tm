<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/template/css/contact.css">
    <?php include ROOT . '/views/layouts/head.php'; ?>
    <link rel="stylesheet" href="/template/css/account.css">
    <title>Account</title>
</head>

<body>
<div class="wrapper">

    <?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="main layout" style="flex-direction: column;">
        <div class="categories">
            <div class="category">
                <a href="/account/personaldata"><p>Personal data</p></a>
            </div>
            <div class="category">
                <a href="/account/bankdetails"><p>My bank cards</p></a>
            </div>
            <div class="category">
                <a href=""><p>Wish list</p></a>
            </div>
            <div class="category">
                <a href=""><p>Cart</p></a>
            </div>
            <div class="category">
                <a href=""><p>My orders</p></a>
            </div>
        </div>

        <div class="contact">
            <?php if(isset($errors) && is_array($errors)):  ?>
                <ul>
                    <?php foreach ($errors as $error):  ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach;  ?>
                </ul>
            <?php endif;  ?>
            <form action="#" method="post">
                <fieldset>
                    <section>
                        <label class="input">
                            <i class="fa fa-append fa-tag"></i>
                            <input type="text" name="name" placeholder="Login" value="<?php echo $name ?>">
                        </label>
                    </section>
                    <section>
                        <label class="input">
                            <i class="fa fa-append fa-tag"></i>
                            <input type="password" name="password" placeholder="Password">
                        </label>
                    </section>
                    <section>
                        <label class="input">
                            <i class="fa fa-append fa-tag"></i>
                            <input type="password" name="conf_password" placeholder="Confirm password">
                        </label>
                    </section>
                    <button type="submit" name="submit" class="button">Edit</button>
                </fieldset>
            </form>
        </div>

    </div>

    <?php include ROOT . '/views/layouts/footer.php'; ?>

</div>
</body>
</html>
