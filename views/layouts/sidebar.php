<div class="sidebar">
    <div class="inside-sidebar">
        <a href="/catalog">All</a>
        <?php foreach($categories as $categoryItem): ?>
            <?php if($categoryItem['status'] == 1): ?>
                <a href="/catalog/category/<?php echo $categoryItem['id']; ?>">
                    <?php echo $categoryItem['name']; ?>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
