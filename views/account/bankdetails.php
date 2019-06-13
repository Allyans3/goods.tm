<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/template/css/contact.css">
    <?php include ROOT . '/views/layouts/head.php'; ?>
    <link rel="stylesheet" href="/template/css/account.css">
    <script src="/template/js/card.js"></script>
    <title>Account</title>
</head>

<body>
<div class="wrapper">

    <?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="main layout" style="flex-direction: column; padding: 0;">
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
            <?php if ($result): ?>
                <h3>Your card has been successfully added!</h3>
            <?php else: ?>
                <div class='card-wrapper'></div>
                <p>Credit card detail</p>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <form action="#" method="post">
                    <fieldset>
                        <section>
                            <label class="input">
                                <input type="text" name="number" placeholder="Card Number" required>
                            </label>
                        </section>
                        <div class="row">
                            <section class="col col-2">
                                <label class="input">
                                    <input type="text" name="first-name" placeholder="First Name" required>
                                </label>
                            </section>
                            <section class="col col-2">
                                <label class="input">
                                    <input type="text" name="last-name" placeholder="Last Name" required>
                                </label>
                            </section>
                        </div>
                        <div class="row">
                            <section class="col col-2">
                                <label class="input">
                                    <input type="text" name="expiry" placeholder="Expiry Date" required>
                                </label>
                            </section>
                            <section class="col col-2">
                                <label class="input">
                                    <input type="text" name="cvc" placeholder="Security Code" required>
                                </label>
                            </section>
                        </div>
                        <button type="submit" name="submit" class="button">Save</button>
                    </fieldset>
                </form>
            <?php endif; ?>
        </div>

    </div>

    <?php include ROOT . '/views/layouts/footer.php'; ?>

</div>
<script src="/template/js/bankdetails.js"></script>
</body>
</html>
