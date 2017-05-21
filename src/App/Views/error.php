<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Application Error</title>
    <link rel="stylesheet" type="text/css" href="web/css/main.css" />
    <link rel="stylesheet" type="text/css" href="web/css/style.css" />
</head>
<body>
<div class="container container-error">
    <section class="error-application">
        <h1><?php echo h($title); ?></h1>
        <div class="row">
            <p><?php echo h($message); ?></p>
            <a href="index.php"><< back to main list</a>
        </div>
    </section>
</div>
</body>
</html>