<?php
namespace App;
class Db
{
  protected $dbh;//соединение

    public function __construct()
    {
        $config = include (__DIR__.'/../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $this->dbh = new \PDO($dsn, $config['user'], $config['password']);
    }
    public function execute(string $sqlString){
        $sth = $this->dbh->prepare($sqlString);
        echo ('запрос в базу '.$sqlString);
       // var_dump($sth);
        $res = $sth->execute();// вернет true or false
       // var_dump($res);
        return $res;
    }
    public function query(string $sqlString, $class){
        //var_dump($sqlString);
        $sth = $this->dbh->prepare($sqlString);
        $res = $sth->execute();//вернет true или false удался ли запрос?
        echo '$res= '."$res";
        if(false !== $res){
            echo('$res='.$res);
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
      
    }

}


