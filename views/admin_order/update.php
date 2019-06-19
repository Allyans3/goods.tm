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
                    <h2>Update order</h2>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>First name</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="text" name="first_name" required
                                   placeholder="Enter first name..." value="<?php echo $order['first_name']; ?>">
                            <div class="form-input-decor"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Last name</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="text" name="last_name" required
                                   placeholder="Enter last name..." value="<?php echo $order['last_name']; ?>">
                            <div class="form-input-decor"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Phone number</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="tel" name="phone_number" required
                                   placeholder="Enter phone number..." value="<?php echo $order['phone_number'] ?>">
                            <div class="form-input-decor"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Email</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="email" name="email" required
                                   placeholder="Enter phone number..." value="<?php echo $order['email'] ?>">
                            <div class="form-input-decor"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Delivery city</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="text" name="del_city" required
                                   placeholder="Enter phone number..." value="<?php echo $order['del_city'] ?>">
                            <div class="form-input-decor"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Address</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="text" name="address" required
                                   placeholder="Enter phone number..." value="<?php echo $order['address'] ?>">
                            <div class="form-input-decor"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Date of order</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="text" name="date" required
                                   placeholder="Enter your date of order..." value="<?php echo $order['date'] ?>">
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
                                <option value="1" <?php if($order['status'] == 1) echo ' selected="selected"'; ?>><?php echo Order::getStatusText(1); ?></option>
                                <option value="2" <?php if($order['status'] == 2) echo ' selected="selected"'; ?>><?php echo Order::getStatusText(2); ?></option>
                                <option value="3" <?php if($order['status'] == 3) echo ' selected="selected"'; ?>><?php echo Order::getStatusText(3); ?></option>
                                <option value="4" <?php if($order['status'] == 4) echo ' selected="selected"'; ?>><?php echo Order::getStatusText(4); ?></option>
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
