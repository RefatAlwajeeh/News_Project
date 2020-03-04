
        <?php

        require_once ("db_connect.php");


        class model
        {
            private $site_db;



        const select_all_cat = "select * from categories where cat_status=?";


        const insert_cat = "insert into categories(cat_id,cat_title,cat_status,create_by,create_date) values(null,?,'0',?,now())";


        const one_cat_select ="Select * from  categories where cat_id=?";




            /*Cat*/
            const Inactive_Cat="update categories set cat_status='0' where cat_id=?";
            const Active_Cat="update categories set cat_status='1' where cat_id=?";
            const Delete_Cat="delete from  categories  where cat_id=?";

            const Update_Cat =  "select * from articles where States=1";


            public function __construct()
            {
                $this->site_db = new SiteDB();


            }

        }

        ?>