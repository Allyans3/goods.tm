<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ROOT . '/views/layouts/head.php'; ?>
    <title>Food Delivery</title>
</head>

<body>
    <div class="wrapper">

        <?php include ROOT . '/views/layouts/header.php'; ?>

        <div class="main layout">

            <?php include ROOT . '/views/layouts/sidebar.php'; ?>

            <div class="goods">
                <div class="gooods">
                    <?php foreach ($latestProducts as $product): ?>
                        <div class="goods-item">
                            <i class="far fa-heart like"></i>
                            <div class="goods-image-block">
                                <img class="goods-image" src="<?php echo Product::getImage($product['id']); ?>">
                            </div>
                            <div class="goods-info">
                                <a class="name" href="/product/<?php echo $product['id']; ?>">
                                    <?php echo $product['name']; ?>
                                </a>
                                <p>$<?php echo $product['price']; ?></p>
                                <a class="buy-button" href="#" data-id="<?php echo $product['id']; ?>">
                                    <i class="fas fa-shopping-cart"></i>Add to cart
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php include ROOT . '/views/layouts/footer.php'; ?>

    </div>
</body>
</html>
