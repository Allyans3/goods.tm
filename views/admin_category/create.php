<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ROOT . '/views/layouts/admin/head_admin.php'; ?>
    <link rel="stylesheet" href="/template/css/checkout.css">
    <title>Administrator Panel</title>
</head>

<body>
<?php include ROOT . '/views/layouts/admin/sidebar_admin.php'; ?>

<div class="header-main">
    <?php include ROOT . '/views/layouts/admin/header_admin.php'; ?>
    <div class="content">
        <div class="checkout-area" style="flex-direction: column;">
            <form action="#" method="post">
                <div class="checkout-title">
                    <h2>Create category</h2>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Category name</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="text" name="name" required
                                   placeholder="Enter your category name...">
                            <div class="form-input-decor"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Serial number</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="text" name="sort_order" required
                                   placeholder="Enter your serial number...">
                            <div class="form-input-decor"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Status</p>
                    </div>
                    <div class="form-row2_3">
                        <div class="form-field">
                            <select class="form-input" name="status">
                                <option value="1">Displayed</option>
                                <option value="0">Hidden</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <input class="purchase" type="submit" name="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/template/js/autosize.js"></script>
<script>
    autosize($('textarea'));
</script>
</body>

</html>
