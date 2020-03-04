<?php
require_once ("db_connect.php");
require_once ("PostModel.php");

    class PostController
    {
       private $site_db;
       private $category;


    public function __construct()
    {
        $this->site_db = new SiteDB();
        $this->model = new model();

    }

        public function Get_All_Arts()
        {
//               post

            $allData= $this->site_db->getData(model::cat_select);
            return $allData->fetchAll();

        }

        public function insertTo($args=array()){

//               post

            $this->site_db->insertToTabel(model::sql_insert,$args);

        }



        public function getOneArt($art_id)
        {
            //               post

            $allData= $this->site_db->get_one_art(model::one_art_select,[$art_id]);
            return $allData->fetchAll();

        }

        public function getArtsCat($art_id)
        {
            //               post

            $allData= $this->site_db->get_one_art(model::arts_cat_select,[$art_id]);
            return $allData->fetchAll();

        }


        public function UpdateArt($args=array()){

            //               post

            $this->site_db->insertToTabel(model::update_art,$args);

        }

        public function ActiveArt($args=array()){

            //               post

            $this->site_db->insertToTabel(model::active_art,$args);

        }

        public function DeleteArt($args=array()){

//               post

            $this->site_db->insertToTabel(model::delete_art,$args);

        }




        public function getArt()
        {
            //               post

            $allData= $this->site_db->getData(model::cat_name);
            return $allData->fetchAll();

        }

    public function get_all_art()
    {
        //               post

        $allData= $this->site_db->getData(model::All_Art);
//       return mysqli_num_rows($allData);
        return $allData->fetchAll();

    }


    public function UpdateCat($args=array()){

        //               post

        $this->site_db->insertToTabel(model::Update_Cat,$args);
        return true;

    }

        public function getCat($s)
        {
            $allData= $this->site_db->getData(model::select_all_cat,[$s]);
            return $allData->fetchAll();

        }







}
?>