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
     <!-- Форма регистрации -->

<form action="register" method="POST" enctype="multipart/form-data">
    <label>Почта</label>
    <input type="email" name="email" placeholder="Введите адрес своей почты">
    <label>Имя</label>
    <input type="text" name="name" placeholder="Введите свое имя">
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
    <button type="submit">Зарегистрироваться</button>
    <p>
        У вас уже есть аккаунт? - <a href="login">авторизируйтесь</a>
    </p>
   
</form>
</div>

<!--<div style="color: red; font-size: 14px; padding: 20px; margin: 0 auto; display: block; width:400px;">-->
<?php if (!empty($errors)) : ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors as $err) : ?>
                <li><?php echo $err; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
    
</body>
</html>