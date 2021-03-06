<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ROOT . '/views/layouts/head.php'; ?>
    <title><?php echo $product['name']. " | $". $product['price']; ?></title>
</head>

<body>
    <div class="wrapper">

        <?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main layout">

            <?php include ROOT . '/views/layouts/leftbar.php'; ?>
            <div class="desc-block">
                <p class="logo"><?php echo $product['name'] ?> Code: <?php echo $product['code']; ?></p>
                <div class="desc-mid">
                    <div class="desc-img">
                        <img src="<?php echo Product::getImage($product['id']); ?>">
                    </div>
                    <div class="block-for-buy">
                        <div class="seller">
                            <div class="seller-block">
                                <p>Seller: <?php echo $product['brand']; ?></p>
                                <p>Number: +126388488273</p>
                            </div>
                        </div>
                        <div class="price">
                            <div class="price-block">
                                <p>Count:</p>
                                <p>Buy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="goods-desc">
                    <strong>Description</strong>
                    <?php echo $product['description']; ?>
                </div>
            </div>
        </div>

        <?php include ROOT . '/views/layouts/footer.php'; ?>

    </div>
</body>
</html>
