<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="keywords" content="Fabio, Oliveira, Software, Developer">
    <meta name="description" content="Fabio Oliveira's personal portfolio.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="icon" href="assets/images/logo_round.png">
    <title>
        [Tsadriu] Fabio Oliveira
    </title>
</head>
<body>
<header class="header">
    <img src="assets/images/logo.png" alt="Logo icon" class="logo">
    <div>
        <h1>FABIO OLIVEIRA DE SOUSA</h1>
        <h2>Apprentice Software Developer</h2>
    </div>
    <div class="social-icons">
        <a href="https://discord.com/users/403650027169513472" target="_blank">
            <i class="fa-brands fa-discord"></i>
        </a>
        <a href="https://github.com/Tsadriu" target="_blank">
            <i class="fa-brands fa-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/fabio-oliveira-de-sousa-2328a21b5/" target="_blank">
            <i class="fa-brands fa-linkedin-in"></i>
        </a>
    </div>
</header>
<div id="body">
    <h2>My Skills</h2>
    <hr>
    <?php include './views/skills.php'; ?>
    <h2>My Projects</h2>
    <hr>
    <?php include './views/projects.php'; ?>
</div>
</body>
</html>