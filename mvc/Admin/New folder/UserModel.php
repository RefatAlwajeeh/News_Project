
        <?php

        require_once ("db_connect.php");


        class user_model
        {
            private $site_db;

        const select_all_users = "select * from users where States=?";

            /*User*/
            const Inactive="update users set States='0' where User_Id=?";
            const Active="update users set States='1' where User_Id=?";
            const Delete_User="delete from  Users  where User_Id=?";



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