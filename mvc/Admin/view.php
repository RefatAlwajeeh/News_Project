<?php

require_once ("CategoriesController.php");

$categories = new CategoriesController();

foreach ($categories->getCategories() as $category){
    echo "<p>".$category->title."</p>";
}


?>