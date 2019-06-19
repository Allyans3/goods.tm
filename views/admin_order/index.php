<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ROOT . '/views/layouts/admin/head_admin.php'; ?>
    <link rel="stylesheet" type="text/css" href="/template/css/table.css">
    <title>Administrator Panel</title>
</head>

<body>
<?php include ROOT . '/views/layouts/admin/sidebar_admin.php'; ?>

<div class="header-main">
    <?php include ROOT . '/views/layouts/admin/header_admin.php'; ?>
    <div class="content">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID order</th>
                    <th>Full name</th>
                    <th>Phone number</th>
                    <th>Data</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($orderList as $order): ?>
                    <tr>
                        <td><?php echo $order['id']; ?></td>
                        <td><?php echo $order['first_name'] ." ". $order['last_name']; ?></td>
                        <td><?php echo $order['phone_number']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>
                        <td><a href="/admin/order/view/<?php echo $order['id']; ?>"><i class="fas fa-eye"></i></a></td>
                        <td><a href="/admin/order/update/<?php echo $order['id']; ?>"><i class="fas fa-edit"></i></a></td>
                        <td><a href="/admin/order/delete/<?php echo $order['id']; ?>"><i class="fas fa-trash"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

</body>

</html>
