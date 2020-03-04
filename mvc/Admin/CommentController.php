<?php
require_once ("db_connect.php");
require_once ("CommentModel.php");

    class Controller
    {
       private $site_db;
       private $category;


    public function __construct()
    {
        $this->site_db = new SiteDB();
        $this->model = new Model();

    }

        /*Comments*/

        public function getComments($s)
        {
            $allData= $this->site_db->getData(model::select_com,[$s]);
            return $allData->fetchAll();

        }

        public function insertComment($args=array()){


            $this->site_db->insertToTabel(model::insert_com,$args);
            return true;

        }







    }
?>