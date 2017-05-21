<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product list</title>
    <link rel="stylesheet" type="text/css" href="web/css/main.css" />
    <link rel="stylesheet" type="text/css" href="web/css/style.css" />
</head>
<body>
    <div class="container">
        <section class="product-list">
            <h2>Product list</h2>
            <ul>
                <?php foreach ($products as $id => $name): ?>
                    <li><?php echo h($name); ?><a href="index.php?op=detail&id=<?php echo h($id); ?>">view info &gt;&gt;</a></li>
                <?php endforeach; ?>
            </ul>
        </section>
    </div>
</body>
</html>