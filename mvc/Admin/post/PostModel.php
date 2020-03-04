
        <?php

        require_once ("db_connect.php");


        class model
        {
            private $site_db;

        const cat_select ="select * from articles";
            const one_art_select = "select * from articles where art_id=?";
            const arts_cat_select = "select * from articles left join categories on categories.cat_id=articles.cat where cat=? and States=1";

        const sql_insert ="insert into articles values(null,?,?,?,?,now(),?,0,?,null)";

        const art_select = "select articles.art_id as postid,articles.title as title,categories.cat_title as category from articles left join categories on categories.cat_id=articles.cat where articles.States=1 ";

//        const one_art_select ="select articles.art_id as postid,articles.image,articles.title as title,articles.content,categories.cat_title as category,categories.cat_id as catid from articles left join categories on categories.cat_id=articles.cat where articles.art_id=? and articles.States=1 ";

        const update_art =  " update articles set title=?,cat=?,content=?,image=?, updated_by=? where art_id=?";
        const active_art =  " update articles set States=1 where art_id=?";

        const delete_art = "DELETE FROM articles WHERE art_id=?";




            const cat_name = "select *  from articles left join categories on categories.cat_id=articles.cat where articles.States=1";
            const All_Art="select * from  articles  where States='1'";



            const Update_Cat =  "select * from articles where States=1";

            const select_all_cat = "select * from categories where cat_status=?";


            public function __construct()
            {
                $this->site_db = new SiteDB();


            }

        }

        ?>