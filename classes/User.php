<?php

require_once "Config.php";

class User extends Config {

    public function login($username, $password) {
        $hashed_password = md5($password);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$hashed_password'";
        // excute or run the query
        $result = $this->conn->query($sql);
        if($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['user_id'];
            
            if ($result->num_rows > 0) {
                if ($row['status'] == 'admin') {
                    $this->redirect_js("admin/users.php");
                }else {
                    $this->redirect_js("user/index.php");
                }
                // header("Location: user/index.php");
            } else {
                echo 'Username and Password error.';
            }
        } else {
            echo 'Username and Password error';
        }
    }

    public function selectALL() {
        // query
        $sql = "SELECT * FROM users ORDER BY user_id ASC";
        // execute or the query
        $result = $this-> conn->query($sql);
        // create an empty array
        $rows = array();
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        } else {
            return false;
        }
    }

    public function selectOne($id){
        // query
        $sql = "SELECT * FROM users WHERE user_id=$id";
        // execute or run the query
        $result = $this->conn->query($sql);

        if($result) {
            return $result->fetch_assoc();
        } elseif($result->conn->error) {
            echo "Error" . $this->conn->error;
        }
    }

        public function save($username, $password, $email, $firstname, $lastname, $bio, $status) {

            //md5がパスワードをコンピュータが決めるコード
            $new_password = md5($password);
            $sql = "INSERT INTO users(username, email, password, firstname, lastname, bio, status)
                    VALUES('$username', '$email', '$new_password', '$firstname', '$lastname', '$bio', '$status')";
                    // excute or the query
                    $result = $this->conn->query($sql);

                    if($result) {
                        return true;
                    } else {
                        echo "Error: " . $this->conn->error;
                    }

       
    }
    public function update($id, $username, $email, $firstname, $lastname) {
        $sql = "UPDATE users SET username='$username', email='$email', firstname='$firstname',
                lastname='$lastname' WHERE user_id=$id";
                // excute or run the query
                $result = $this->conn->query($sql);
                if($result) {
                    return true;
                }else {
                    echo "Error: " . $this->conn->error;
                }
    }

    public function delete($id) {
        $sql = "DELETE FROM users WHERE user_id=$id";
        // execute or the query
        $result = $this->conn->query($sql);

        if($result) {
            return true;
        } else {
            echo "Error: " . $this->conn->error;
        }
    }


public function selectSearchResult($interest_id, $level_id, $prefecture_id)
{
    $sql = "SELECT * FROM clubs
            INNER JOIN schools ON schools.school_id=clubs.school_id
            WHERE schools.prefecture_id = $prefecture_id
            AND clubs.interest_id = $interest_id
            AND level_id = $level_id";
}

}

