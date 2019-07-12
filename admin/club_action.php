<?php
    require_once "classes/Club.php";

    // create instance
    $club = new Club;


    if($_GET['action'] == 'add') {
        $clubname = $_POST['clubname'];
        $result = $club->save($clubname);

        if($result) {
            echo "<script>window.location.replace('clubs.php');</script>";
        }else {
            echo "Error!!";
        }
    }


    elseif($_GET['action'] == 'update') {
        $club_id = $_POST['club_id'];
        $clubname = $_POST['clubname'];
        $result = $club->update($club_id, $clubname);

        if($result) {
            echo "<script>window.location.replace('clubs.php');</script>";
        }
    }
    elseif($_GET['action'] == 'delete') {
        $club_id = $_GET['club_id'];
        $result = $club->delete($club_id);
        if($result) {
            echo "<script>window.location.replace('clubs.php');</script>";
        }

    }

?>