<?php
require_once ("db_connect.php");
require_once ("model.php");

    class Controller
    {
       private $site_db;
       private $category;


    public function __construct()
    {
        $this->site_db = new SiteDB();
        $this->model = new Model();

    }

        public function getCategories()
        {
//           $allData= $this->site_db->getData(model::sql_q,[$c_id]);

            $allData= $this->site_db->getData(model::cat_select);
            return $allData->fetchAll();

        }

        public function insertTo($args=array()){


            $this->site_db->insertToTabel(model::sql_insert,$args);

        }


//        public function getArt()
//        {
//            $allData= $this->site_db->getData(model::art_select);
//            return $allData->fetchAll();
//
//        }

        public function getOneArt($art_id)
        {
            $allData= $this->site_db->get_one_art(model::one_art_select,[$art_id]);
            return $allData->fetchAll();

        }

        public function getArtsCat($art_id)
        {
            $allData= $this->site_db->get_one_art(model::arts_cat_select,[$art_id]);
            return $allData->fetchAll();

        }


        public function UpdateArt($args=array()){


            $this->site_db->insertToTabel(model::update_art,$args);

        }

        public function ActiveArt($args=array()){


            $this->site_db->insertToTabel(model::active_art,$args);

        }

        public function DeleteArt($args=array()){


            $this->site_db->insertToTabel(model::delete_art,$args);

        }

        public function getCat($s)
        {
            $allData= $this->site_db->getData(model::select_all_cat,[$s]);
            return $allData->fetchAll();

        }

        public function insertCat($args=array()){


            $this->site_db->insertToTabel(model::insert_cat,$args);
            return true;

        }


        public function getOneCat($c_id)
        {
//           $allData= $this->site_db->getData(model::sql_q,[$c_id]);

            $allData= $this->site_db->getData(model::one_cat_select,[$c_id]);
            return $allData->fetchAll();

        }

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

        public function getArt()
        {
            $allData= $this->site_db->getData(model::cat_name);
            return $allData->fetchAll();

        }

    public function get_all_art()
    {
        $allData= $this->site_db->getData(model::All_Art);
//       return mysqli_num_rows($allData);
        return $allData->fetchAll();

    }

    public function getUsers($s)
    {
        $allData= $this->site_db->getData(model::select_all_users,[$s]);
        return $allData->fetchAll();

    }

/*User*/
    public function Inactive_User($args){


        $this->site_db->insertToTabel(model::Inactive,[$args]);

    }

    public function Active_User($args){


        $this->site_db->insertToTabel(model::Active,[$args]);

    }

    public function Delete_User($args){


        $this->site_db->insertToTabel(model::Delete_User,[$args]);

    }

    /*Cat*/
    public function Inactive_Cat($args){


        $this->site_db->insertToTabel(model::Inactive_Cat,[$args]);

    }

    public function Active_Cat($args){


        $this->site_db->insertToTabel(model::Active_Cat,[$args]);

    }

    public function Delete_Cat($args){


        $this->site_db->insertToTabel(model::Delete_Cat,[$args]);

    }

    public function UpdateCat($args=array()){


        $this->site_db->insertToTabel(model::Update_Cat,$args);
        return true;

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


/*Votes*/
    public function insert_polls($args=array()){


        $this->site_db->insertToTabel(model::Insert_Vote,$args);
        return true;

    }


    public function insert_vote_answers($args=array()){


        $this->site_db->insertToTabel(model::Insert_Vote_answers,$args);
        return true;

    }


    /*User*/
    public function insertUser($args=array()){


        $this->site_db->insertToTabel(model::Insert_User,$args);
        return true;

    }

    public function login_user($args=array())
    {
//           $allData= $this->site_db->getData(model::sql_q,[$c_id]);

        $allData= $this->site_db->getData(model::Login_User,$args);
        return $allData->fetchAll();

    }





}
?>