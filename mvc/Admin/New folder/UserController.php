<?php
require_once ("db_connect.php");
require_once ("UserModel.php");

    class UserController
    {
       private $site_db;
       private $category;


    public function __construct()
    {
        $this->site_db = new SiteDB();
        $this->model = new user_model();

    }



    public function getUsers($s)
    {
//        Users

        $allData= $this->site_db->getData(model::select_all_users,[$s]);
        return $allData->fetchAll();

    }

/*User*/
    public function Inactive_User($args){

//        Users

        $this->site_db->insertToTabel(model::Inactive,[$args]);

    }

    public function Active_User($args){

//        Users
        $this->site_db->insertToTabel(model::Active,[$args]);

    }

    public function Delete_User($args){

//        Users

        $this->site_db->insertToTabel(model::Delete_User,[$args]);

    }



    /*User*/
    public function insertUser($args=array()){

//        Users

        $this->site_db->insertToTabel(model::Insert_User,$args);
        return true;

    }

    public function login_user($args=array())
    {
//        Users

        $allData= $this->site_db->getData(model::Login_User,$args);
        return $allData->fetchAll();

    }





}
?>