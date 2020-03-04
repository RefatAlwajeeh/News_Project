<?php
require_once ("db_connect.php");
require_once ("BNModel.php");

    class BNController
    {
       private $site_db;
       private $category;


    public function __construct()
    {
        $this->site_db = new SiteDB();
        $this->model = new model();

    }

//    breaking_news

        public function insertBN($args=array()){


            $this->site_db->insertToTabel(model::insert_BN,$args);
            return true;

        }

        public function getBN($n)
        {

            $allData= $this->site_db->getData(model::select_BN,[$n]);
            return $allData->fetchAll();

        }

        public function getOneBN($BN_id)
        {
//           $allData= $this->site_db->getData(model::sql_q,[$c_id]);

            $allData= $this->site_db->getData(model::one_BN_select,[$BN_id]);
            return $allData->fetchAll();

        }

        public function UpdateBN($args=array()){


            $this->site_db->insertToTabel(model::update_BN,$args);

        }

        public function DeleteBN($args=array()){


            $this->site_db->insertToTabel(model::delete_BN,$args);

        }






    }
?>