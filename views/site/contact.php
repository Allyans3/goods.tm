<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/template/css/contact.css">
    <?php include ROOT . '/views/layouts/head.php'; ?>
    <title>Food Delivery</title>
</head>

<body>
<div class="wrapper">

    <?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="main layout">
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
                    <div class="row">
                        <section class="col col-2">
                            <label class="input">
                                <i class="fa fa-append fa-user"></i>
                                <input type="text" name="userName" placeholder="Name" required>
                            </label>
                        </section>
                        <section class="col col-2">
                            <label class="input">
                                <i class="far fa-append fa-envelope"></i>
                                <input type="email" name="userEmail" placeholder="E-mail" required>
                            </label>
                        </section>
                    </div>
                    <section>
                        <label class="input">
                            <i class="fa fa-append fa-tag"></i>
                            <input type="text" name="userSubject" placeholder="Subject">
                        </label>
                    </section>
                    <section>
                        <label class="textarea">
                            <i class="fa fa-append fa-comment"></i>
                            <textarea rows="5" name="userText" placeholder="Text" required></textarea>
                        </label>
                    </section>
                    <button type="submit" name="submit" class="button">Send</button>
                </fieldset>
            </form>
        </div>
    </div>

    <?php include ROOT . '/views/layouts/footer.php'; ?>

</div>
</body>
</html>

