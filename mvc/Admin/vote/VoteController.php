<?php
require_once ("db_connect.php");
require_once ("VoteModel.php");

    class VoteController
    {
       private $site_db;
       private $category;


    public function __construct()
    {
        $this->site_db = new SiteDB();
        $this->model = new vote_model();

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







    }
?>