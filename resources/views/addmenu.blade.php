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
    <a href="#tab_01" class="tabs__item">Реєстрація персоналу</a>
    <a href="#tab_02" class="tabs__item">Додавання зірок</a>
    <a href="#tab_03" class="tabs__item">Редагування зірок</a>

</nav>
<div class="wrapper">
    <div class="content">
        <div class="tabs" >

            <div id="tab_01" class="tabs__block">
                <h1 class="h2">Реєстрація Персоналу</h1>
                <form action="{{'/reg/person'}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label  for="password">Пароль</label>
                        <input type="text" name="personal_password" placeholder="Введіть Пароль" id="personal_password" class="form-control">
                        <label  for="email">Пошта</label>
                        <input type="text" name="personal_email" placeholder="Введіть пошту" id="personal_email" class="form-control">
                        <button type="submit"  class="btn btn-success">Створити</button>
                    </div>

                </form>
            </div>
            <div id="tab_02" class="tabs__block">
                <h2 class="h2">Додавання зірок</h2>
                <form action="{{'/add/stars'}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label  for="name">Назва</label>
                        <input type="text" name="star_name" placeholder="Введіть Назву" id="star_name" class="form-control">
                        <label for="description">Опис</label>
                        <input type="text" name="star_description" placeholder="Введіть Опис" id="star_description" class="form-control">
                        <label  for="price">Ціна</label>
                        <input type="number" name="star_price" placeholder="Введіть ціну" id="star_price" class="form-control">

                        <button type="submit" name="star_add_button" class="btn btn-success">Створити</button>
                    </div>

                </form>
            </div>
            <div id="tab_03" class="tabs__block">
                <h2 class="h2">Редагування зірок</h2>
                <form action="/red/stars" method="post">
                    @csrf
                    <div class="form-group">
                        <label  for="name">Назва</label>
                        <input type="text" name="star_name" placeholder="Введіть Назву" id="star_name" class="form-control">
                        <label for="description">Опис</label>
                        <input type="text" name="star_description" placeholder="Введіть Опис" id="star_description" class="form-control">
                        <label for="price">Ціна</label>
                        <input type="number" name="star_price" placeholder="Введіть ціну" id="star_price" class="form-control">
                        <button type="submit" name="star_redo_button" class="btn btn-success">Редагувати</button>

            </div>
            </form>

        </div>
    </div>
</div>
</div>
</body>
</html>
