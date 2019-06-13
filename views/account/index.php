<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ROOT . '/views/layouts/head.php'; ?>
    <link rel="stylesheet" href="/template/css/account.css">
    <title>Account</title>
</head>

<body>
    <div class="wrapper">

        <?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main layout">
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

        </div>

        <?php include ROOT . '/views/layouts/footer.php'; ?>

    </div>
</body>
</html>
