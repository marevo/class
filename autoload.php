<?php

function __autoload($class){
    // App\Models\User => ./App/Models/User.php
    echo '<br>';var_dump('зашли в autoload.php');

    $pathNew = __DIR__.'/'.str_replace('\\','/' ,$class.'.php' );
    echo '<hr>';
    var_dump($class);
    echo '<hr>';
    var_dump($pathNew);
    echo '<hr>';
    $str = __DIR__.'/'.str_replace('\\','/',$class).'.php';
  
    require __DIR__.'/App/'.str_replace('\\','/',$class).'.php';
}
