<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ROOT . '/views/layouts/admin/head_admin.php'; ?>
    <link rel="stylesheet" type="text/css" href="/template/css/admin/dashboards.css">
    <title>Administrator Panel</title>
</head>

<body>
    <?php include ROOT . '/views/layouts/admin/sidebar_admin.php'; ?>

    <div class="header-main">
        <?php include ROOT . '/views/layouts/admin/header_admin.php'; ?>
        <div class="content">
            <div class="dashboards-col">
                <div class="dashboards-row">
                    <div class="board">
                        <p class="board-title">Number of products sold</p>
                        <span class="board-stat">10648</span>
                    </div>
<!--                    <div class="board">-->
<!--                        <p class="board-title">Unique users this month</p>-->
<!--                        <span class="board-stat">30627</span>-->
<!--                    </div>-->
                    <div class="board">
                        <p class="board-title">Count of orders</p>
                        <span class="board-stat"><?php echo $countOfOrders; ?></span>
                    </div>
                    <div class="board">
                        <p class="board-title">Online</p>
                        <span class="board-stat">2590</span>
                    </div>
                    <div class="board">
                        <p class="board-title">Registered users today</p>
                        <span class="board-stat">236</span>
                    </div>
                    <div class="board">
                        <p class="board-title">Number of products</p>
                        <span class="board-stat"><?php echo $countOfProducts; ?></span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
