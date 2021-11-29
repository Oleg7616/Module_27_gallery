<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->

  <title>Авторизация и регистрация</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">
     <!-- Форма авторизации -->

<form action="" method="POST" enctype="multipart/form-data" >
    <label>Имя</label>
    <input type="text" name="name" placeholder="Введите свое имя">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Войти</button>
    <p>
        У вас нет аккаунта? - <a href="register">зарегистрируйтесь</a>
    </p>
   
</form>
</div>
</body>
</html>