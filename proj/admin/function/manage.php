<?php
session_start();
  require_once('../db.php');

function get_header(){
require_once('includes/header.php');
}
function get_sidebar(){
  require_once('includes/sidebar.php');
}
function get_footer(){
  require_once('includes/footer.php');
}
function getLoggedID(){
  return !empty($_SESSION['id']) ? true:false;
}
function needLogged(){
  $check=getLoggedID();
  if(!$check){
    header('Location:login.php');
  }
}
function emo(){
  if($_SESSION['role']==1|| $_SESSION['role']==2){
    header('Location:all-user.php');
  }else if($_SESSION['role']==3|| $_SESSION['role']==4) {
  header('Location:add-user.php');
  }

}


 ?>
