<?php
    require_once "classes/Sport.php";

    // create instance
    $sport = new Sport;


    if($_GET['action'] == 'add') {
        $sportname = $_POST['sport_name'];
        $result = $sport->save($sportname);

        if($result) {
            echo "<script>window.location.replace('sports.php');</script>";
        }else {
            echo "Error!!";
        }
    }


    elseif($_GET['action'] == 'update') {
        $sport_id = $_POST['sport_id'];
        $sportname = $_POST['sportname'];
        $result = $sport->update($sport_id, $sportname);

        if($result) {
            echo "<script>window.location.replace('sports.php');</script>";
        }
    }
    elseif($_GET['action'] == 'delete') {
        $sport_id = $_GET['sport_id'];
        $result = $sport->delete($sport_id);
        if($result) {
            echo "<script>window.location.replace('sports.php');</script>";
        }

    }

?>