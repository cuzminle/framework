# framework
Данный проект представляет собой простой php фреймворк, в котором реализованы такие функции как:
-Обработка маршрутов (.htaccess, vendor/core/router.php, public/index.php);
-Обработка и логирование ошибок (vendor/core/HandlerError.php, tmp/errors.log);
-Работа с базой данных реализована с помощью ORM RedBeanPHP (vendor/core/db.php, vendor/libs/rb-mysql.php, config_db.php);
-Кэширование данных (vendor/libs/Cache.php) в app/controllers/MainController.php в методе indexAction проверяется кэш данных;
-Регистрация и авторизация пользователя (app/controllers/UserController.php, app/models/UserModel.php, app/views/User/login.php, app/views/User/signUp.php);
-Шаблон реестр для конторля созданных объектов (vendor/core/Registry.php) объект реестра создан в классе vendor/core/App.php;
-Валидация данных для регистрации и авторизации пользователей.
Для валидации использовалась стороннаяя библиотека vlucas/valitron (vendor/core/base/Model.php);

В разработке использовались OpenServer, PHP 8.1., MySql 8.0, Apache 2.4 
