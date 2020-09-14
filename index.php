<!DOCTYPE html>
<html lang="RU-ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="alert alert-danger alert-dismissible fade d-none" data-autohide="false" role="alert" id="alert">
    <button type="button" class="close" id="close">
        <span aria-hidden="true" id='msg'>&times;</span>
    </button>
</div>
</br>
    <div class="container">
        <div class="row">
            <div class="col-md-4"> </div>
            <div class="col-md-4">
                <form method="post" id="ajaxForm">
                    <div class="form-group">
                        <label for="name">Имя: </label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Иван">
                    </div>
                    <div class="form-group">
                        <label for="surname">Фамилия: </label>
                        <input type="text" id="surname" class="form-control" name="surname" placeholder="Иванов">
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="text" id="email" class="form-control" name="email" placeholder="ivanov@mail.ru">
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль: </label>
                        <input type="password" id="password" class="form-control" name="password" placeholder="*****">
                    </div>
                    <div class="form-group">
                        <label for="repeatPass">Повтор пароля: </label>
                        <input type="password" id="repeatPass" class="form-control" name="repeatPass" placeholder="*****">
                    </div>
                    <input type="submit" class="btn btn-primary btn-block" name="send">
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
<script type="text/javascript" src="ajaxForm.js"></script>

</html>
