<?php

namespace Models;

class Users
{
    public $arusers;
    public function __construct($_aruser)
    {
        $this->arusers = $_aruser;
    }
    public static function GetAllUsers(){
        $dsn = 'mysql:host=127.0.0.1;dbname=team_project5';
        $dbh = new \PDO($dsn,'root','');
        $sth = $dbh->prepare('SELECT * FROM users ORDER BY name_user');
        $sth->execute();
        $data = $sth->fetchAll();
        $allU = [];
       // var_dump($data);
        foreach ($data as $du){
            $allU[]=new \Models\User($du['id_user'],$du['name_user'] ,$du['email_user'] ,$du['login'] ,$du['password'] ,$du['id_role'],$du['ip_date_reg']);
        }
        return $allU;
    }
    public function GetAllUsersFromObjectClassUsers(){
        $dsn = 'mysql:host=127.0.0.1;dbname=team_project5';
        $dbh = new \PDO($dsn,'root','');
        $sth = $dbh->prepare('SELECT * FROM users ORDER by name_user');
        $sth->execute();
        $data = $sth->fetchAll();
        $allU = [];
        //var_dump($data);
        foreach ($data as $du){
            $allU[]=new \Models\User($du['id_user'],$du['name_user'] ,$du['email_user'] ,$du['login'] ,$du['password'] ,$du['id_role'],$du['ip_date_reg']);
        }
        return $allU;
    }
}
?>