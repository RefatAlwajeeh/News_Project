
        <?php

        require_once ("db_connect.php");


        class vote_model
        {
            private $site_db;

            /*Vote*/

            const Insert_Vote ="INSERT INTO polls VALUES (NULL, ?, ?)";
            const Insert_Vote_answers ="INSERT INTO poll_answers VALUES (NULL, ?, ?, 0)";


            public function __construct()
            {
                $this->site_db = new SiteDB();


            }

        }

        ?>