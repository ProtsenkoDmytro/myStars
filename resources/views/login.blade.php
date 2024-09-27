<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/app-login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
    <div class='header-line'>
        <div class='header-im'>


            <a href="welcome">  <img  src="/images/StarLogo.png" alt="" class='logo' width="210" height="160"></a>
        </div >
        <a class='AuthButton' href="login">Авторизуватися</a>

        <a  class='colorM' href="welcome">Головна сторінка</a>

        <a class='colorM' href="profile">Особистий Кабінет</a>
    </div>




</header>
<nav class="tabs__items" >
    <a href="#tab_01" class="tabs__item">Реєстрація клієнтів</a>
    <a href="#tab_02" class="tabs__item">Авторизація клієнтів</a>
    <a href="#tab_03" class="tabs__item">Авторизація персоналу</a>

</nav>
<div class="wrapper">
    <div class="content">
        <div class="tabs" >

            <div id="tab_01" class="tabs__block">
                <h1 class="h3">Реєстрація</h1>
                <form action="{{'/reg/clients'}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label  for="password">Пароль</label>
                        <input type="text" name="clients_password" placeholder="Введіть Пароль" id="clients_password" class="form-control">
                        <label  for="name">Імя</label>
                        <input type="text" name="clients_name" placeholder="Введіть Імя" id="clients_name" class="form-control">
                        <label for="surname">Прізвище</label>
                        <input type="text" name="clients_surname" placeholder="Введіть Прізвище" id="clients_surname" class="form-control">
                        <label  for="phone">Телефон</label>
                        <input type="text" name="clients_number" placeholder="Введіть телефон" id="clients_number" class="form-control">
                        <label  for="email">Пошта</label>
                        <input type="text" name="clients_email" placeholder="Введіть пошту" id="clients_email" class="form-control">

                        <button type="submit"  class="btn btn-success">Створити</button>
                    </div>

                </form>
            </div>
            <div id="tab_02" class="tabs__block">
                <h2 class="h4">Авторизація</h2>
                <form action="{{'/aut/clients'}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label  for="password">Пароль</label>
                        <input type="text" name="clients_password" placeholder="Введіть Пароль" id="clients_password" class="form-control">
                        <label  for="email">Пошта</label>
                        <input type="text" name="clients_email" placeholder="Введіть пошту" id="clients_email" class="form-control">
                        <button type="submit" class="btn btn-success">Авторизуватися</button>
                    </div>
                </form>
            </div>

            <div id="tab_03" class="tabs__block">
                <h2 class="h2">Авторизація персоналу</h2>
                <form action="{{'/aut/person'}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label  for="password">Пароль</label>
                        <input type="text" name="personal_password" placeholder="Введіть Пароль" id="personals_password" class="form-control">
                        <label  for="email">Пошта</label>
                        <input type="text" name="personal_email" placeholder="Введіть пошту" id="personals_email" class="form-control">
                        <button type="submit" name="serv_add_button" class="btn btn-success">Авторизуватися</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
