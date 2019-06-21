<div class="sidebar">

    <div class="sidebar-top">
        <div class="sidebar-top-up">
            <svg class="cross-close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/>
            </svg>
            <a class="sidebar-logo" href="/"><b>Food Delivery</b></a>
        </div>
        <div class="sidebar-top-down">
            <?php if (User::isGuest()): ?>
                <a href="/login">Login</a>
                <span>|</span>
                <a href="/register">Register</a>
            <?php else: ?>
                <span><?php echo "User ID: " . $_SESSION["user"]; ?></span>
            <?php endif; ?>
        </div>
    </div>

    <div class="sidebar-inner">
        <nav class="sidebar-nav">
            <ul class="sidebar-nav-list">
                <?php if (User::checkAdminStatus()): ?>
                    <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link"href="/admin"><i class="fas fa-user-shield"></i> Admin panel</a></li>
                <?php endif; ?>
                <li class="sidebar-nav-list-item ">
                    <a class="sidebar-link border-bottom js-nav-link" href="#!"><i class="fas fa-bars"></i> Catalog</a>
                    <ul class="sidebar-nav-sublist js-subnav">
                        <li class="sidebar-nav-sublist-item"><a class="sidebar-sublist-link" href="/catalog">All</a></li>
                        <?php foreach($categories as $categoryItem): ?>
                            <?php if($categoryItem['status'] == 1): ?>
                                <li class="sidebar-nav-sublist-item"><a class="sidebar-sublist-link" href="/catalog/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <?php if (!User::isGuest()): ?>
                    <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link" href="/account"><i class="fas fa-user-circle"></i> My account</a></li>
                    <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link" href="/account/orders"><i class="far fa-list-alt"></i> My orders</a></li>
                <?php endif; ?>
                <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link" href="/cart"><i class="fas fa-shopping-cart"></i> Cart</a></li>
                <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link" href="/favourite"><i class="fas fa-heart fav"></i> Favourite</a></li>
                <li class="sidebar-nav-list-item">
                    <a class="sidebar-link border-top js-nav-link"href="#!"><i class="fas fa-phone"></i> Contact numbers</a>
                    <ul class="sidebar-nav-sublist js-subnav">
                        <li class="sidebar-nav-sublist-item"><p class="sidebar-sublist-link">Home: +38 (044) 19-32-442</p></li>
                        <li class="sidebar-nav-sublist-item"><p class="sidebar-sublist-link">Kyivstar: +38 (067) 26-32-829</p></li>
                        <li class="sidebar-nav-sublist-item"><p class="sidebar-sublist-link">Life: +38 (063) 17-83-291</p></li>
                        <li class="sidebar-nav-sublist-item"><p class="sidebar-sublist-link">Vodafone: +38 (095) 84-72-629</p></li>
                    </ul>
                </li>
                <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link"href="/account/orders"><i class="fas fa-envelope"></i> Feedback</a></li>
                <?php if (!User::isGuest()): ?>
                    <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link"href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                <?php endif; ?>
            </ul>
        </nav>

    </div>
</div>

<div class="menu-overlay"></div>