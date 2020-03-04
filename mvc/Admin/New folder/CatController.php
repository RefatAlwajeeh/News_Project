<?php
require_once ("db_connect.php");
require_once ("CatModel.php");

    class CatController
    {
       private $site_db;
       private $category;


    public function __construct()
    {
        $this->site_db = new SiteDB();
        $this->model = new model();

    }


        public function getCat($s)
        {
//            cat

            $allData= $this->site_db->getData(model::select_all_cat,[$s]);
            return $allData->fetchAll();

        }

        public function insertCat($args=array()){

//            cat

            $this->site_db->insertToTabel(model::insert_cat,$args);
            return true;

        }


        public function getOneCat($c_id)
        {
//            cat

            $allData= $this->site_db->getData(model::one_cat_select,[$c_id]);
            return $allData->fetchAll();

        }



    /*Cat*/
    public function Inactive_Cat($args){

//            cat

        $this->site_db->insertToTabel(model::Inactive_Cat,[$args]);

    }

    public function Active_Cat($args){

        //            cat

        $this->site_db->insertToTabel(model::Active_Cat,[$args]);

    }

    public function Delete_Cat($args){

//            cat

        $this->site_db->insertToTabel(model::Delete_Cat,[$args]);

    }

    public function UpdateCat($args=array()){

//            cat

        $this->site_db->insertToTabel(model::Update_Cat,$args);
        return true;

    }








}
?>