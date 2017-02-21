namespace App;
<?php


class Db
{
  protected $dbh;

    public function __construct()
    {
        echo 'hello word';
       /*
        $config = include (__DIR__.'/../config.php');
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['team_project5'];
        return $this->dbh = new \PDO($dsn, $config['user'], $config['password']);
*/
    }
    public function executeQuery(string $sqlString){
        $sth = $this->dbh->prepare($sqlString);
        return $sth->execute();// вернет true or false
    }
    public function query(string $sqlString, $class){
        $sth = $this->dbh->prepare($sqlString);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

}

?>
