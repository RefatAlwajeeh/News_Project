<?php
session_start();

if(!($_SESSION['type']=="user" || $_SESSION['type']=="Admin")){
  echo "wellcom Admin";
}
 ?>
