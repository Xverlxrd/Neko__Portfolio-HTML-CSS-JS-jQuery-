<?php
   $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_EMAIL);
   
   $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

   $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

   if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Недопустимая длинна логина";
    exit();
   } else if(mb_strlen($name) < 3 || mb_strlen($name) > 50){
    echo "Недопустимая длинна имени";
    exit();
   } else if(mb_strlen($password) < 6 || mb_strlen($password) > 12){
    echo "Недопустимая длинна пароля (от 6 до 12 символов)";
    exit();
   }

   $password = md5($password. "");//Хеширование пароля с усложнением

   $mysql = new mysqli('localhost', 'root', 'root', 'register_bd');//Подключаем бд
   $mysql -> query("INSERT INTO `users`  (`name`, `login`, `password`) VALUES('$name', '$login', '$password')"); // Добавляем в поля


   $mysql -> close();//закрываем бд

   header('Location: /site');


?>