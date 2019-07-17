<?php
    require_once "../classes/Club.php";

    // create instance
    $clubs = new Club;


    if($_GET['action'] == 'add') {
        $clubname = $_POST['club_name'];
        $result = $clubs->save($clubname);

        if($result) {
            echo "<script>window.location.replace('clubs.php');</script>";
        }else {
            echo "Error!!";
        }
    }


    elseif($_GET['action'] == 'update') {
        $club_id = $_POST['club_id'];
        $clubname = $_POST['club_name'];
        $result = $clubs->update($club_id, $clubname);

        if($result) {
            echo "<script>window.location.replace('clubs.php');</script>";
        }
    }
    elseif($_GET['action'] == 'delete') {
        $club_id = $_GET['club_id'];
        $result = $clubs->delete($club_id);
        if($result) {
            echo "<script>window.location.replace('clubs.php');</script>";
        }

    }

?>