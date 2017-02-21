<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>успеваемость учеников</title>
   <!-- js код -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
   <!-- или так-->
   <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/manual.css">
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/ajax_post_get.js"></script>
    <style>
        td {
            max-width: 180px;
        }
    </style>
</head>
<body>
<?php
//include_once('navigation.php');

require __DIR__.'/autoload.php';

/*
if(null !== $user = \Models\User::getUser('login2','password2') ){
    echo '<br> есть такой пользователь: '.'login2 '.' password2';
    $userData = $user;
   // require __DIR__ . '/templates/indexUserView.php';
}



//вставка нового пользователя в таблицу users
/*if(null == $userData = \Models\User::getUser('login2','password2') ) {
    User::addUser('вторая проба пробовна', 'email', 'login2', 'password2', '2017-02-15');
    require __DIR__ . '/templates/indexUserView.php';
}else{
    echo 'не получиться вставить второй раз login2,password2';
}*/

//показать всех юзеров на экране
//$users = \App\Models\User::GetAllUsers();
//var_dump($users);
$user = \App\Models\User::getUser('login2','password2');
var_dump($user);
?>

</body>
</html>
