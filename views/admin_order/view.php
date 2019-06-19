<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ROOT . '/views/layouts/admin/head_admin.php'; ?>
    <link rel="stylesheet" href="/template/css/checkout.css">
    <link rel="stylesheet" type="text/css" href="/template/css/table.css">
    <title>Administrator Panel</title>
</head>

<body>
<?php include ROOT . '/views/layouts/admin/sidebar_admin.php'; ?>

<div class="header-main">
    <?php include ROOT . '/views/layouts/admin/header_admin.php'; ?>
    <div class="content">
        <div class="checkout-area" style="flex-direction: column;">
            <div class="checkout-title">
                <h2>View order №</h2>
            </div>
            <div class="form-row">
                <div class="form-row1">
                    <p>Full name</p>
                </div>
                <div class="form-row2">
                    <div class="form-field">
                        <p><?php echo $order['first_name'] ." ". $order['last_name']; ?></p>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-row1">
                    <p>Phone number</p>
                </div>
                <div class="form-row2">
                    <div class="form-field">
                        <p><?php echo $order['phone_number']; ?></p>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-row1">
                    <p>Email</p>
                </div>
                <div class="form-row2">
                    <div class="form-field">
                        <p><?php echo $order['email']; ?></p>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-row1">
                    <p>Delivery city</p>
                </div>
                <div class="form-row2">
                    <div class="form-field">
                        <p><?php echo $order['del_city']; ?></p>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-row1">
                    <p>Address</p>
                </div>
                <div class="form-row2">
                    <div class="form-field">
                        <p><?php echo $order['address']; ?></p>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-row1">
                    <p>Date of order</p>
                </div>
                <div class="form-row2">
                    <div class="form-field">
                        <p><?php echo $order['date']; ?></p>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-row1">
                    <p>Status</p>
                </div>
                <div class="form-row2">
                    <div class="form-field">
                        <p><?php echo Order::getStatusText($order['status']); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID product</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Count</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td><?php echo $productsQuantity[$product['id']]; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="/template/js/autosize.js"></script>
<script>
    autosize($('textarea'));
</script>
</body>

</html>
