
        <?php

        require_once ("db_connect.php");


        class bn_model
        {
            private $site_db;

            const insert_BN = "insert into breaking_news values(null,?,now(),?,?,?,null,?,1)";
            const select_BN ="select * from breaking_news where s_date=?";
            const one_BN_select ="Select * from  breaking_news where id=?";
            const update_BN =  "update breaking_news set content=?,updated_by=? where id=?";
            const delete_BN = "DELETE FROM breaking_news WHERE id=?";

            public function __construct()
            {
                $this->site_db = new SiteDB();


            }

        }

        ?>