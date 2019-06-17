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
        <a class="add-prod" href="/admin/category/create"><i class="fas fa-plus"></i> Add category</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID category</th>
                    <th>Name</th>
                    <th>Serial number</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($categoriesList as $category): ?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td><?php echo $category['sort_order']; ?></td>
                        <td>
                            <?php if($category['status'] == 1) echo "Displayed";
                                    else echo "Not displayed"?>
                        </td>
                        <td><a href="/admin/category/update/<?php echo $category['id']; ?>">Update</a></td>
                        <td><a href="/admin/category/delete/<?php echo $category['id']; ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

</body>

</html>
