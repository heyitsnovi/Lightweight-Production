<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>


<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
<link rel="stylesheet" href="<?= base_url('assets/default.css') ?>">


</head>
<body>
<style>
	html,
body {
    height: 100%;
    margin: 0;
}

body {
    font-family: Roboto, sans-serif;
    min-height: 100vh;
    background: linear-gradient(135deg, #0f172a, #1e293b);
    color: #fff;

    display: flex;
    justify-content: center;
    align-items: center;

    text-align: center;
    padding: 2rem;
    box-sizing: border-box;
}

.wrapper {
    width: 100%;
    max-width: 850px;
}

.hero {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
</style>

<div class="wrapper">
    <div class="hero">

        <h1 class="error-code">404</h1>

        <p class="subtitle">
            Page Not Found
        </p>

        <p class="description">
            The page you are looking for doesn't exist, may have been moved,
            or the URL may have been entered incorrectly.
        </p>

        <div class="actions">
            <a href="<?= base_url() ?>" class="btn btn-primary">
                Return Home
            </a>
        </div>

        <div class="info-card">
            <strong>LightWeight Framework</strong>
            <span>The requested resource could not be located.</span>
        </div>

    </div>
</div>

</body>
</html>
