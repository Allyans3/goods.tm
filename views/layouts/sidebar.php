<div class="sidebar">
    <div class="inside-sidebar">
        <a href="/catalog">All</a>
        <?php foreach($categories as $categoryItem):   ?>
            <a href="/catalog/category/<?php echo $categoryItem['id']; ?>">
                <?php echo $categoryItem['name']; ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>
