<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ROOT . '/views/layouts/head.php'; ?>
    <link rel="stylesheet" href="/template/css/checkout.css">
    <title>Food Delivery</title>
</head>

<body>
<div class="wrapper">

    <?php include ROOT . '/views/layouts/header.php'; ?>

    <div class="main layout">

        <div class="checkout-area">
            <div class="checkout-area__left">
                <form action="#" method="post">
                    <div class="checkout-title">
                        <h2>Contact details</h2>
                    </div>
                    <div class="form-row form-order">
                        <div class="form-row1">
                            <p>First name*</p>
                        </div>
                        <div class="form-row2">
                            <div class="form-field">
                                <input class="form-input" type="text" name="first_name" required placeholder="Enter your first name...">
                                <div class="form-input-decor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-order">
                        <div class="form-row1">
                            <p>Last name*</p>
                        </div>
                        <div class="form-row2">
                            <div class="form-field">
                                <input class="form-input" type="text" name="last_name" required placeholder="Enter your last name...">
                                <div class="form-input-decor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-order">
                        <div class="form-row1">
                            <p>Phone number*</p>
                        </div>
                        <div class="form-row2">
                            <div class="form-field">
                                <input class="form-input" type="tel" name="phone_number" required placeholder="Enter your phone number...">
                                <div class="form-input-decor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-order">
                        <div class="form-row1">
                            <p>E-mail</p>
                        </div>
                        <div class="form-row2">
                            <div class="form-field">
                                <input class="form-input" type="email" name="e_mail" placeholder="Enter your e-mail...">
                                <div class="form-input-decor"></div>
                            </div>
                        </div>
                    </div>
                    <h2 class="form-subtitle">Shipping and payment</h2>
                    <div class="form-row form-order">
                        <div class="form-row1">
                            <p>Delivery сity*</p>
                        </div>
                        <div class="form-row2">
                            <div class="form-field">
                                <input class="form-input" type="text" name="del_city" required placeholder="Enter your city...">
                                <div class="form-input-decor"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-order">
                        <div class="form-row1">
                            <p>Delivery address*</p>
                        </div>
<!--                        <div class="form-row22">-->
                        <div class="form-row22">
                            <div class="form-row2_1">
                                <div class="form-field">
                                    <input class="form-input" type="text" name="address_street" required placeholder="Enter your street...">
                                    <div class="form-input-decor"></div>
                                </div>
                            </div>
                            <div class="form-row2_2">
                                <div class="form-field">
                                    <input class="form-input" type="text" name="address_numb" required placeholder="№">
                                    <div class="form-input-decor"></div>
                                </div>
                            </div>
                            <div class="form-row2_2">
                                <div class="form-field">
                                    <input class="form-input" type="text" name="address_apart" required placeholder="ap.">
                                    <div class="form-input-decor"></div>
                                </div>
                            </div>
                        </div>

<!--                        </div>-->
                    </div>
                    <div class="form-row form-row-radios" style="align-items: flex-start; margin-top: 20px;">
                        <div class="form-row1">
                            <p>Payment method*</p>
                        </div>
                        <div class="form-row2">
                            <div class="form-field">
                                <div class="form-radio">
                                    <div class="radio-row">
                                        <input type="radio" id="PAY_SYSTEM_1" class="radio-input" name="pay_method" value="cash" checked>
                                        <label for="PAY_SYSTEM_1" class="radio-label">Cash courier</label>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="radio-row">
                                        <input type="radio" id="PAY_SYSTEM_2" class="radio-input" name="pay_method" value="credit card">
                                        <label for="PAY_SYSTEM_2" class="radio-label">Payment card online</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row" style="justify-content: center;">
                        <input class="purchase" type="submit" name="purchase" value="Make a purchase">
                    </div>
                </form>
            </div>

            <div class="checkout-area__right">
                <div class="checkout-wrapper">
                    <div class="checkout-title">
                        <h2>Cart</h2>
                    </div>
                    <div class="checkout-goods">
                        <?php foreach ($products as $product): ?>
                        <div class="order-item">
                            <a class="item-image" href="/product/<?php echo $product['id']; ?>">
                                <img class="order-item-image" src="<?php echo Product::getImage($product['id']); ?>">
                            </a>
                            <div class="order-item-content">
                                <p class="title">
                                    <a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name'] ?></a>
                                </p>
                                <div class="price-area">
                                    <div class="cart-counter">
                                        <a class="circle circle-minus" href="#" data-id="<?php echo $product['id']; ?>">
                                            <p class="cirle-item" style="padding-bottom: 5px">-</p>
                                        </a>
                                    </div>
                                    <span class="cnt" data-id="<?php echo $product['id']; ?>"><?php echo $productsInCart[$product['id']]; ?></span>
                                    <div class="cart-counter">
                                        <a class="circle circle-plus" href="#" data-id="<?php echo $product['id']; ?>">
                                            <p class="cirle-item">+</p>
                                        </a>
                                    </div>
                                    <div class="cart-price">
                                        <p data-id="<?php echo $product['id']; ?>">$<?php echo $product['price']*$productsInCart[$product['id']]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="order-item-delete">
                                <a href="/cart/delete/<?php echo $product['id']; ?>"><i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="checkout-bottom">
                        <div class="delivery">
                            <p>Delivery
                                <?php if(Cart::hasDiscount($totalPrice) == 0): ?>
                                    <span class="delivery-price">Free</span>
                                <?php else: ?>
                                    <span class="delivery-price">$10</span>
                                <?php endif; ?>
                            </p>
                        </div>
                        <div class="summary">
                            <p>Total price <span class="summary-price">$<?php echo $totalPrice; ?></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include ROOT . '/views/layouts/footer.php'; ?>

</div>
</body>
</html>
