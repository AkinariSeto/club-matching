<?php
    require_once "classes/User.php";

    // create instance
    $user = new User;


    if($_GET['action'] == 'add') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $bio = $_POST['bio'];
        $result = $user->save($username, $password, $email, $firstname, $lastname, $bio);

        if($result) {
            echo "<script>window.location.replace('users.php');</script>";
        }else {
            echo "Error!!";
        }
    }


    elseif($_GET['action'] == 'update') {
        $user_id = $_POST['user_id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $bio = $_POST['bio'];
        $result = $user->update($user_id, $username, $email, $firstname, $lastname, $bio);

        if($result) {
            echo "<script>window.location.replace('users.php');</script>";
        }
    }
    elseif($_GET['action'] == 'delete') {
        $user_id = $_GET['user_id'];
        $result = $user->delete($user_id);
        if($result) {
            echo "<script>window.location.replace('users.php');</script>";
        }

    }

?>