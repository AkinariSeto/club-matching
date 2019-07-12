<?php
    require_once "classes/Skill_level.php";

    // create instance
    $level = new Level;


    if($_GET['action'] == 'add') {
        $levelname = $_POST['level_name'];
        $result = $level->save($levelname);

        if($result) {
            echo "<script>window.location.replace('skill_levels.php');</script>";
        }else {
            echo "Error!!";
        }
    }


    elseif($_GET['action'] == 'update') {
        $level_id = $_POST['level_id'];
        $levelname = $_POST['level_name'];
        $result = $level->update($level_id, $levelname);

        if($result) {
            echo "<script>window.location.replace('skill_levels.php');</script>";
        }
    }
    elseif($_GET['action'] == 'delete') {
        $level_id = $_GET['level_id'];
        $result = $level->delete($level_id);
        if($result) {
            echo "<script>window.location.replace('skil_levels.php');</script>";
        }

    }

?>