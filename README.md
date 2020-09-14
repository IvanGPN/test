# Greensight

## Тестовое задание

Создать страницу с формой.
В форме должны быть следующие поля:
- имя
- фамилия
- email
- пароль
- повтор пароля

Реализовать отправку этой формы при помощи AJAX.
Реализовать обработку AJAX запроса на php.
В обработчике должен задаваться некий массив уже существующих юзеров (получать его из какой-либо базы данных не требуется), а также проводиться проверка есть ли в нём юзер с заполненным юзером емейлом. Результат проверки должен логироваться в файл.
При успешной проверке - форма должна скрываться, а пользователю должно выводиться сообщение об успешной регистрации. 
При неудачной проверке - пользователю должна выводиться ошибка над формой.

Создать публичный репозиторий на github и загрузить туда весь исходный код задания. Файлы-логи не должны попадать в репозиторий.
В качестве результата передать ссылку на этот репозиторий.

Можно использовать любые javascript библиотеки.
Для стилизации страницы использовать https://getbootstrap.com/ .
