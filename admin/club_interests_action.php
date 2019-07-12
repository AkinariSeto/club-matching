<?php
    require_once "classes/Club_interests.php";

    // create instance
    $ci = new Club_interests;


    if($_GET['action'] == 'add') {
        $ciname = $_POST['ciname'];
        $result = $ci->save($ciname);

        if($result) {
            echo "<script>window.location.replace('club_interests.php');</script>";
        }else {
            echo "Error!!";
        }
    }


    elseif($_GET['action'] == 'update') {
        $ci_id = $_POST['ci_id'];
        $ciname = $_POST['ci_name'];
        $result = $ci->update($ci_id, $ciname);

        if($result) {
            echo "<script>window.location.replace('club_interests.php');</script>";
        }
    }
    elseif($_GET['action'] == 'delete') {
        $ci_id = $_GET['ci_id'];
        $result = $ci->delete($ci_id);
        if($result) {
            echo "<script>window.location.replace('club_interests.php');</script>";
        }

    }

?>