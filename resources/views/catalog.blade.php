<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/catalog.css">
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
<div class="t1"><h3 class="h3">Доступні зірки</h3></div>

@foreach($dataCatalog as $el)

    <div class="alert alert-info">
        <h1 class="r3">{{$el->star_name}}</h1>
        <p class="r1">Номер зірки: {{$el->id}}</p>
        <p class="r1">Опис: {{$el->star_description}}</p>
        <p class="r1">Ціна: {{$el->star_price}} грн</p>
        @endforeach
    </div>
    <h8 class="h8">Підтвердження покупки</h8>
    <form action="/buy/stars" method="post">
        @csrf
        <div class="form-group">
            <label class="r2" for="text">Айді зірки</label>
            <input type="text" name="stars_id" placeholder="Введіть Id" id="stars_id" class="form-control">
            <label class="r2" for="text">Ваш Email</label>
            <input type="text" name="clients_email" placeholder="Введіть Email" id="clients_email" class="form-control">
            <label class="r2" for="text">Пароль</label>
            <input type="text" name="clients_password" placeholder="Введіть Пароль" id="clients_email" class="form-control">

            <button type="submit" name="serv_add_button" class="btn btn-success">Придбати</button></div></form>


</body>
</html>

