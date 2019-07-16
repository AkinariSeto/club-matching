<?php
    require_once "../classes/School.php";

    // create instance
    $school = new School;


    if($_GET['action'] == 'add') {
        $schoolname = $_POST['school_name'];
        $schoolphone = $_POST['school_phone'];
        $schoolinfo = $_POST['school_info'];
        $city = $_POST['city'];
        $prefecture = $_POST['prefecture_name'];
        $result = $school->save($schoolname, $schoolphone, $schoolinfo, $city, $prefecture);

        if($result) {
            echo "<script>window.location.replace('schools.php');</script>";
        }else {
            echo "Error!!";
        }
    }


    elseif($_GET['action'] == 'update') {
        $school_id = $_POST['school_id'];
        $schoolname = $_POST['school_name'];
        $schoolphone = $_POST['school_phone'];
        $schoolinfo = $_POST['school_info'];
        $city = $_POST['city'];
        $result = $school->update($school_id, $schoolname, $schoolphone, $schoolinfo, $city);

        if($result) {
            echo "<script>window.location.replace('schools.php');</script>";
        }
    }
    elseif($_GET['action'] == 'delete') {
        $school_id = $_GET['school_id'];
        $result = $school->delete($school_id);
        if($result) {
            echo "<script>window.location.replace('schools.php');</script>";
        }

    }

?>