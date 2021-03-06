<?php include ROOT . '/views/layouts/sidebar.php'; ?>

<header class="header">
    <div class="layout">
        <div class="up-header">
            <div class="contacts">
                <p><a href="#">Home: +38 (044) 19-32-442</a></p>
                <p><a href="/contacts">Contacts</a></p>
            </div>
            <div class="account">
                <?php if (User::isGuest()): ?>
                    <p><a href="/login">Login</a></p>
                    <p><a href="/register">Register</a></p>
                <?php else: ?>
                    <?php if (User::checkAdminStatus()): ?>
                        <p><a href="/admin">Admin panel</a></p>
                    <?php endif; ?>
                    <p><a href="/account">Account</a></p>
                    <p><a href="/logout">Logout</a></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="down-header">
            <a class="burger-sidebar">
                <span></span>
                <span></span>
                <span></span>
            </a>
            <div class="logo1">
                <a href="/"><b>Food Delivery</b></a>
            </div>
            <div class="logo2">
                <a href="/"><b>FD</b></a>
            </div>
            <input class="search-line" type="text" name="search" value="" placeholder="Find product or restaurant">
            <button class="search-button" type="submit" name="Search"><i class="fas fa-search"></i></button>
            <div class="account-whim">
                <a href="/favourite"><i class="fas fa-heart fav"></i></a>
                <a href="/cart">
                    <i class="fas fa-shopping-cart cart">
                        <p id="cart-count"><?php echo Cart::countItems(); ?></p>
                    </i>
                </a>
            </div>
        </div>
    </div>
</header>