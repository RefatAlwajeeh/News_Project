<?php
require_once ("db_connect.php");
require_once ("CatModel.php");

    class CatController
    {
       private $site_db;
       private $category;


    public function __construct()
    {
        $this->site_db = new SiteDB();
        $this->model = new model();

    }


        public function getCat($s)
        {
//            cat

            $allData= $this->site_db->getData(model::select_all_cat,[$s]);
            return $allData->fetchAll();

        }

        public function insertCat($args=array()){

//            cat

            $this->site_db->insertToTabel(model::insert_cat,$args);
            return true;

        }


        public function getOneCat($c_id)
        {
//            cat

            $allData= $this->site_db->getData(model::one_cat_select,[$c_id]);
            return $allData->fetchAll();

        }



    /*Cat*/
    public function Inactive_Cat($args){

//            cat

        $this->site_db->insertToTabel(model::Inactive_Cat,[$args]);

    }

    public function Active_Cat($args){

        //            cat

        $this->site_db->insertToTabel(model::Active_Cat,[$args]);

    }

    public function Delete_Cat($args){

//            cat

        $this->site_db->insertToTabel(model::Delete_Cat,[$args]);

    }

    public function UpdateCat($args=array()){

//            cat

        $this->site_db->insertToTabel(model::Update_Cat,$args);
        return true;

    }



}


$controller = new CatController();

if(isset($_POST['submit']))
{
    $category=$_POST['category'];

    $data = [
        $category,
        $_SESSION['U_name']
    ];


    if($controller->insertCat($data))
    {
        $msg = "Category created.";
    }
    else
    {
        $error = "Something went wrong . Please try again.";
    }
}

  /*Active and delete*/

if($_GET['action']=='del' && $_GET['rid'])
{
    $id=intval($_GET['rid']);
//	$query=mysqli_query($con,"update categories set cat_status='0' where cat_id='$id'");
    $controller->Inactive_Cat($id);
    $msg="Category deleted ";
    header('location:../../admin/Category/manage-categories.php');
}
// Code for restore
if($_GET['resid'])
{
    $id=intval($_GET['resid']);
//	$query=mysqli_query($con,"update categories set cat_status='1' where cat_id='$id'");
    $controller->Active_Cat($id);
    $msg="Category restored successfully";
    header('location:../../admin/Category/manage-categories.php');
}

// Code for Forever deletionparmdel
if($_GET['action']=='parmdel' && $_GET['rid'])
{
    $id=intval($_GET['rid']);
//	$query=mysqli_query($con,"delete from  categories  where cat_id='$id'");
    $controller->Delete_Cat($id);
    $delmsg="Category deleted forever";
    header('location:../../admin/Category/manage-categories.php');
}

//Edit

if(isset($_POST['submit-edit']))
{
    $catid=intval($_GET['cid']);
    $category=$_POST['category'];
    $description=$_POST['description'];

    $data = [
        $category,
        $catid
    ];



    if($controller->UpdateCat($data))
    {
        $msg="Category Updated successfully ";
        header('location:../../admin/Category/manage-categories.php');
    }
    else{
        $error="Something went wrong . Please try again.";
        header('location:../../admin/Category/manage-categories.php');
    }
}

?>