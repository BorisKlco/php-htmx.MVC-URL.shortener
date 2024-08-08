<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/style.css">
    <title>Home</title>
</head>

<body>
    <div class="header">
        <nav>
            <img class="logo" src="static/logo.svg" alt="">
            <div class="nav-selection">
                <a href="#">Home</a>
                <a href="#">Stats</a>
            </div>
        </nav>
        <button class="login"><span>Sign in</span></button>
    </div>
    <h1 class="h1-info">More than a link shortener...</h1>
    <div class="hero">


        <div class="hero-main">
            <div></div>
            <div class="hero-input">
                <p class="input-info">Use URL shortener or QR generator and keep track of your connections...</p>
                <form action="">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="link-icon"></i>
                        </span>
                        <input name="link" placeholder="Link it & ship it!" class="form-control" type="url">
                    </div>
                </form>
                <div class="hero-div-submit">
                    <span class="checkbox-span">
                        <input type="checkbox" checked>
                        <p class="checkbox-info">Insert fake views</p>
                    </span>
                    <button>Send</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>