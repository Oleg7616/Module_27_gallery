<?php require_once 'application\config\config.php'; ?>

<!DOCTYPE HTML>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <!-- Bootstrap CSS (jsDelivr CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- Bootstrap Bundle JS (jsDelivr CDN) -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <h3 class="nav-link">Галерея</h3>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <?php if (!isset($username)) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="main">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Войти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register">Зарегистрироваться</a>
                        </li>
                    <?php else : ?>
                        <h3>Здравствуйте <?php echo $username ?></h3>
                        <li class="nav-item">
                            <a class="nav-link" href="../main/logout">Выйти</a>
                        </li>
                </ul>


            <?php endif; ?>
            </div>
        </nav>
    </header>
    <?php include $content_view; ?>
    </div>
    <footer>
        <p>&copy; 2021 Oleg Leontjev</p>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</html>