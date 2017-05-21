<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product View</title>
    <link rel="stylesheet" type="text/css" href="web/css/main.css" />
    <link rel="stylesheet" type="text/css" href="web/css/style.css" />
</head>
<body>
<div class="container">
    <section class="product-view">
        <h3><?php echo h($product->name); ?></h3>
        <div class="row">
            <div class="col-1">Description</div>
            <div class="col-2"><?php echo h($product->description); ?></div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-1">Type</div>
            <div class="col-2"><?php echo h($product->type); ?></div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-1">Supliers</div>
            <div class="col-2">
                <ul>
                    <?php foreach ($product->suppliers as $suplier): ?>
                        <li><?php echo h($suplier); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row last">
            <a href="index.php"><< back to main list</a>
        </div>
    </section>
</div>
</body>
</html>