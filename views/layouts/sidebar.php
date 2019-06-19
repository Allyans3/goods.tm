<div class="sidebar">

    <div class="sidebar-top">
        <div class="sidebar-top-up">
            <svg class="cross-close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/>
            </svg>
            <a class="sidebar-logo" href="/"><b>Food Delivery</b></a>
        </div>
        <div class="sidebar-top-down">
            <a href="/login">Login</a>
            <span>|</span>
            <a href="/register">Register</a>
        </div>
    </div>

    <div class="sidebar-inner">
        <nav class="sidebar-nav">
            <ul class="sidebar-nav-list">
                <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link"href="/admin"><i class="fas fa-user-shield"></i> Admin panel</a></li>
                <li class="sidebar-nav-list-item">
                    <a class="sidebar-link js-nav-link" href="#"><i class="fas fa-bars"></i> Catalog</a>
                    <ul class="sidebar-nav-sublist js-subnav">
                        <?php foreach($categories as $categoryItem): ?>
                            <?php if($categoryItem['status'] == 1): ?>
                                <li class="sidebar-nav-sublist-item"><a class="sidebar-sublist-link" href="/catalog/category/<?php echo $categoryItem['id']; ?>"><?php echo $categoryItem['name']; ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </li>
<!--                <li class="sidebar-nav-list-item">-->
<!--                    <a class="sidebar-link js-nav-link"href="#">Profile</a>-->
<!--                    <ul class="sidebar-nav-sublist js-subnav">-->
<!--                        <li class="sidebar-nav-sublist-item"><a class="sidebar-sublist-link" href="#">Personal Data</a></li>-->
<!--                        <li class="sidebar-nav-sublist-item"><a class="sidebar-sublist-link" href="#">Address Data</a></li>-->
<!--                        <li class="sidebar-nav-sublist-item"><a class="sidebar-sublist-link" href="#">Account Data</a></li>-->
<!--                        <li class="sidebar-nav-sublist-item"><a class="sidebar-sublist-link" href="#">History of login</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
                <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link"href="/account"><i class="fas fa-user-circle"></i> My account</a></li>
                <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link"href="/cart"><i class="fas fa-shopping-cart"></i> Cart</a></li>
                <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link"href="/favourite"><i class="fas fa-heart fav"></i> Favourite</a></li>
                <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link"href="/account/orders"><i class="far fa-list-alt"></i> My orders</a></li>
                <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link"href="/account/orders"><i class="fas fa-envelope"></i> Contacts</a></li>
                <li class="sidebar-nav-list-item"><a class="sidebar-link js-nav-link"href="/"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>

    </div>
</div>

<div class="menu-overlay">

</div>