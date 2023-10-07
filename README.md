# Blog_Test
Проект для закрепления знаний по PHP.
Так как проект в основном разчитан на Backend-часть, то в некоторых моментах верстка может съехать...
Реализовано:
-Взаимодействие с БД(connect,SELECT,INSERT,UPDATE)
-Административная панель
-Защита от доступа к админ панели(редирект)
-Работа с сессиями 
В проекте присутсвуют директории:
-admin: Файлы для административной работы
-app:
    -controllers: Файлы с реализациями различных форм(регистрация, посты, комментарии и др.)
    -database: Файлы для работы с базой данными
    -helps: Файлы с массивом в котором хранятсчя различные ошибки
    -include: Директория с файлами, которые подключаются для избежания повторения кода(header,footer,sidebar и т.д)
-assets:
    -css: стили
    -images: изображения
    -js: JS скрипты
-blogs.sql: файл содержащий базу данных с таблицами

#########################

При первом запуске рекомендую создать пользователя и через базу данных выдать ему административные права(изменением параметра admin с 0 на 1
