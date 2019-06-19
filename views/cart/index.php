<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ROOT . '/views/layouts/head.php'; ?>
    <link rel="stylesheet" href="/template/css/table.css">
    <title>Food Delivery</title>
</head>

<body>
<div class="wrapper">

    <?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="main layout">

        <?php include ROOT . '/views/layouts/leftbar.php'; ?>
        <div class="table-responsive">
            <?php if($productsInCart == false): ?>
                <span class="title">Cart is empty</span>
            <?php else: ?>
                <span class="title">Cart</span>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Price, $</th>
                            <th>Count</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?php echo $product['code']; ?></td>
                            <td>
                                <a href="/product/<?php echo $product['id']; ?>">
                                    <?php echo $product['name']; ?>
                                </a>
                            </td>
                            <td>$<?php echo $product['price']; ?></td>
                            <td><?php echo $productsInCart[$product['id']]; ?></td>
                            <td><a href="/cart/delete/<?php echo $product['id']; ?>">Delete</a></td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3">Total cost:</td>
                            <td>$<?php echo $totalPrice; ?></td>
                            <?php if(Cart::hasDiscount($totalPrice) == 0): ?>
                                <td>Free delivery</td>
                            <?php else: ?>
                                <td>+ $<?php echo $discount; ?> delivery</td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
                <a class="checkout-button" href="/cart/checkout">Checkout</a>
            <?php endif; ?>
        </div>
    </div>

    <?php include ROOT . '/views/layouts/footer.php'; ?>

</div>
</body>
</html>
