
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


        const select_all_cat = "select * from categories where cat_status=?";
        const select_all_users = "select * from users where States=?";

//        where cat_status='1'

        const insert_cat = "insert into categories(cat_id,cat_title,cat_status,create_by,create_date) values(null,?,'0',?,now())";


        const one_cat_select ="Select * from  categories where cat_id=?";



            const insert_BN = "insert into breaking_news values(null,?,now(),?,?,?,null,?,1)";
            const select_BN ="select * from breaking_news where s_date=?";
            const one_BN_select ="Select * from  breaking_news where id=?";
            const update_BN =  "update breaking_news set content=?,updated_by=? where id=?";
            const delete_BN = "DELETE FROM breaking_news WHERE id=?";

            const cat_name = "select *  from articles left join categories on categories.cat_id=articles.cat where articles.States=1";
            const All_Art="select * from  articles  where States='1'";

            /*User*/
            const Inactive="update users set States='0' where User_Id=?";
            const Active="update users set States='1' where User_Id=?";
            const Delete_User="delete from  Users  where User_Id=?";


            /*Cat*/
            const Inactive_Cat="update categories set cat_status='0' where cat_id=?";
            const Active_Cat="update categories set cat_status='1' where cat_id=?";
            const Delete_Cat="delete from  categories  where cat_id=?";

            const Update_Cat =  "select * from articles where States=1";


            /*Comment*/
            const select_com = "select * from comment where art_id=?";
            const insert_com = "insert into comment values(null,?,?,?,now())";

            /*Vote*/

            const Insert_Vote ="INSERT INTO polls VALUES (NULL, ?, ?)";
            const Insert_Vote_answers ="INSERT INTO poll_answers VALUES (NULL, ?, ?, 0)";


            /*User*/

            const Insert_User = "Insert Into Users(User_Name,Gender,User_Password,Email,States,Image_Profile,Type)
      Values(?,?,?,?,'0',?,'user')";

            const Login_User = "select Type,User_Name,User_Id,User_Name from users where ((Email=? || User_Name=?)  and User_Password=?)";

            public function __construct()
            {
                $this->site_db = new SiteDB();


            }

        }

        ?>