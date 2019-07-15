<?php
    require_once "../classes/Prefecture.php";

    // create instance
    $prefecture = new Prefecture;


    if($_GET['action'] == 'add') {
        $prefecturename = $_POST['prefecture_name'];
        $result = $prefecture->save($prefecturename);

        if($result) {
            echo "<script>window.location.replace('prefectures.php');</script>";
        }else {
            echo "Error!!";
        }
    }


    elseif($_GET['action'] == 'update') {
        $prefecture_id = $_POST['prefecture_id'];
        $prefecturename = $_POST['prefecture_name'];
        $result = $prefecture->update($prefecture_id, $prefecturename);

        if($result) {
            echo "<script>window.location.replace('prefectures.php');</script>";
        }
    }
    elseif($_GET['action'] == 'delete') {
        $prefecture_id = $_GET['prefecture_id'];
        $result = $prefecture->delete($prefecture_id);
        if($result) {
            echo "<script>window.location.replace('prefectures.php');</script>";
        }

    }

?>