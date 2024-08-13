<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <script src="https://unpkg.com/htmx.org@2.0.2"></script>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <div class="header">
        <nav>
            <img class="logo" src="static/logo.svg" alt="">
            <div class="nav-selection">
                <a href="/">Home</a>
                <a href="/stats">Stats</a>
            </div>
        </nav>
        <button class="login"><span>Sign in</span></button>
    </div>

    <?php include_once VIEW_PATH . $view . '.php'; ?>

</body>

</html>