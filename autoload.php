<?php

function __autoload($class){
       // App\Models\User => ./App/Models/User.php
    require __DIR__.'/'.str_replace('\\','/',$class).'.php';
}
