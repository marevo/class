<?php
namespace  App\Models;

use App\Db;

class User
{
    public $id_user;
    public $name_user;
    public $email_user;
    public $login;
    public $password;
    public $id_role;
    public $date_reg;
    public $date_last_visit;
    public $ip_last_visit;

    const TABLE = 'users';
   /* public function __construct($_id_user,$_name_user, $_email_user, $_login,$_password, $_id_role = 3, $_date_reg, $_date_last_visit='null', $_ip_last_visit='null')
    {
        $this->id_user = $_id_user;
        $this->name_user = $_name_user;
        $this->email_user = $_email_user;
        $this->login = $_login;
        $this->password = $_password;
        $this->id_role = $_id_role;
        $this->date_reg = $_date_reg;
        $this->date_last_visit = $_date_last_visit;
        $this->ip_last_visit = $_ip_last_visit;
    }*/
 /*   public function getId(){return $this->id_user;}
    public function getName(){return $this->name_user;}
    public function getEmail(){return $this->email_user;}
    public function getLogin(){return $this->login;}
    public function getPassword(){return $this->password;}
    public function getIdRole(){return $this->id_role;}
    public function getDateReg(){return $this->date_reg;}
    public function geDateLastVisit(){return $this->date_last_visit;}
    public function getIpLastVisit(){return $this->ip_last_visit;}
    */
    public static function GetAllUsers( ){
      $db = new  Db();
        return $db->query('SELECT * FROM '.self::TABLE.' ORDER BY name_user;', '\App\Models\User','\App\Models\User' );
    }
    public static  function getUser(string $_login,string $_password){
        if($_login !='' && $_password != ''){
            $db = new Db();
            $qu = "SELECT * FROM ".self::TABLE."  WHERE login ='$_login' AND  password = '$_password';";
           // var_dump($qu);
            $res = $db->query($qu, self::class );
                return $res;
        }
    }
    public static function addUser($_name_user,$_email_user,$_login,$_password,$_date_req, $_id_role=1 ,$_date_last_visit ='null',$_ip_last_visit='null'){
        $dsn = 'mysql:host=127.0.0.1;dbname=team_project5';
        $dbh = new \PDO($dsn,'root','');
        if(null != $user = self::getUser($_login, $_password)){
             echo ('такой пользователь уже есть');
        }
        else{
            $sth =$dbh ->prepare("INSERT INTO users(name_user,email_user,login,password,id_role,date_reg,date_last_visit,ip_last_visit) VALUES ('$_name_user','$_email_user','$_login','$_password', $_id_role,'$_date_req','$_date_last_visit','$_ip_last_visit');");
           // var_dump($sth);
            $sth->execute();
            if(null!= self::getUser($_login, $_password)){
                echo ('пользователь успешно добавлен');
            }
            else{
                echo ('не удалось добавить пользователя');
            }
        }
    }


}

?>