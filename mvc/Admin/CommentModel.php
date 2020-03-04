
        <?php

        require_once ("db_connect.php");


        class model
        {
            private $site_db;

            /*Comment*/
            const select_com = "select * from comment where art_id=?";
            const insert_com = "insert into comment values(null,?,?,?,now())";

            public function __construct()
            {
                $this->site_db = new SiteDB();


            }

        }

        ?>