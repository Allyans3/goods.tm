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
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="checkout-title">
                    <h2>Create product</h2>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Product name</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="text" name="name" required
                                   placeholder="Enter your product name...">
                            <div class="form-input-decor"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Article code</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="text" name="code" required
                                   placeholder="Enter your article code...">
                            <div class="form-input-decor"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Price, $</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="text" name="price" required
                                   placeholder="Enter your product price...">
                            <div class="form-input-decor"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Category</p>
                    </div>
                    <div class="form-row2_3">
                        <div class="form-field">
                            <select class="form-input" name="category_id">
                                <?php if(is_array($categoriesList)): ?>
                                    <?php foreach ($categoriesList as $category): ?>
                                        <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Manufacturer</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="text" name="brand" required
                                   placeholder="Enter your manufacturer...">
                            <div class="form-input-decor"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Product image</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <input class="form-input" type="file" name="image">
                            <div class="form-input-decor"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Description</p>
                    </div>
                    <div class="form-row2">
                        <div class="form-field">
                            <textarea class="form-input" name="description" cols="1" rows="1" placeholder="Describe your product..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Stock availability</p>
                    </div>
                    <div class="form-row2_3">
                        <div class="form-field">
                            <select class="form-input" name="availability">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Is new?</p>
                    </div>
                    <div class="form-row2_3">
                        <div class="form-field">
                            <select class="form-input" name="is_new">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-row1">
                        <p>Is recommended?</p>
                    </div>
                    <div class="form-row2_3">
                        <div class="form-field">
                            <select class="form-input" name="is_recommended">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
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
