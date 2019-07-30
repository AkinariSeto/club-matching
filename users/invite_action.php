<?php
require_once "../classes/Club.php";
$action = $_GET['action'];
$invite_id = $_GET['invite_id'];
$club = new Club;

if($action == "ACCEPT"){
    $result = $club->acceptInvite($invite_id);
    if($result){
        echo "<script>window.location.replace('index.php');</script>";
    }
}
elseif($action == "CANCEL"){
    $result = $club->cancelInvite($invite_id);
    if($result){
        echo "<script>window.location.replace('index.php');</script>";
    }
}


?>