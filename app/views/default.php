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
		* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Roboto, sans-serif;
    min-height: 100vh;
    background: linear-gradient(135deg, #0f172a, #1e293b);
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 2rem;
}

.wrapper {
    width: 100%;
    max-width: 850px;
}

.hero {
    text-align: center;
}

.badge {
    display: inline-block;
    padding: 8px 14px;
    border-radius: 999px;
    background: rgba(56, 189, 248, .15);
    color: #38bdf8;
    border: 1px solid rgba(56, 189, 248, .3);
    margin-bottom: 1.5rem;
    font-size: .85rem;
    font-weight: 500;
}

h1 {
    font-size: clamp(3rem, 8vw, 5rem);
    font-weight: 700;
    margin-bottom: 1rem;
}

.subtitle {
    font-size: 1.5rem;
    color: #cbd5e1;
    margin-bottom: 1.5rem;
}

.description {
    max-width: 650px;
    margin: 0 auto 2rem;
    color: #94a3b8;
    line-height: 1.8;
    font-size: 1.05rem;
}

.actions {
    margin-bottom: 2rem;
}

.btn {
    display: inline-block;
    padding: 14px 28px;
    border-radius: 10px;
    text-decoration: none;
    transition: .2s ease;
}

.btn-primary {
    background: #38bdf8;
    color: #0f172a;
    font-weight: 600;
}

.btn-primary:hover {
    transform: translateY(-2px);
}

.info-card {
    display: inline-flex;
    flex-direction: column;
    gap: .5rem;
    padding: 18px 24px;
    border-radius: 12px;
    background: rgba(255,255,255,.05);
    border: 1px solid rgba(255,255,255,.08);
    color: #cbd5e1;
}

.info-card span {
    color: #94a3b8;
    font-size: .95rem;
}
	</style>

<div class="wrapper">
    <div class="hero">
        <div class="badge">LightWeight Framework</div>

        <h1>LightWeight</h1>

        <p class="subtitle">
            A Lightweight PHP MVC Framework
        </p>

        <p class="description">
            Build fast, clean, and maintainable PHP applications with a simple MVC architecture.
            LightWeight provides routing, controllers, views, and essential framework features
            without unnecessary overhead.
        </p>

        <div class="actions">
            <a target="_blank"
               href="https://github.com/heyitsnovi/LightWeight-Production"
               class="btn btn-primary">
                View on GitHub
            </a>
        </div>

        <div class="info-card">
            <strong>✓ Application Running Successfully</strong>
            <span>PHP Version: <?= phpversion(); ?></span>
        </div>
    </div>
</div>


</body>
</html>
