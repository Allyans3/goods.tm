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
                    <h2>Update category</h2>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Category name</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="text" name="name" required
                                   placeholder="Enter your category name..." value="<?php echo $category['name'] ?>">
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
                                   placeholder="Enter your serial number..." value="<?php echo $category['sort_order'] ?>">
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
                                <option value="1" <?php if($category['status'] == 1) echo ' selected="selected"'; ?>>Displayed</option>
                                <option value="0" <?php if($category['status'] == 0) echo ' selected="selected"'; ?>>Hidden</option>
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
