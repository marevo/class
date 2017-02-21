<?php
 namespace Models;
class Parent_ extends user
{
    protected $id_parent;
    protected $job_place;
    protected $phone_parent;
    protected $id_user;

    public function __construct( $_id_parent, $_job_place, $_phone_parent, $_id_user )
    {
        $this->id_parent = $_id_parent;
        $this->job_place = $_job_place;
        $this->phone_parent = $_phone_parent;
        $this->id_user = $_id_user;
    }
    public  static function getAllUsers(){
        
    }
}
?>