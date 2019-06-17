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
        <p>Are you really want to delete product №<?php echo $id ?>?</p>

        <form method="post">
            <input type="submit" name="submit" value="Delete">
        </form>
    </div>
</div>

</body>

</html>
