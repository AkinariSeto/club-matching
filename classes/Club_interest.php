<?php

require_once "Config.php";

class Club_interests extends Config {

    public function login($username, $password) {
        $hashed_password = md5($password);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$hashed_password'";
        // excute or run the query
        $result = $this->conn->query($sql);
        if($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['user_id'];
            echo "<script>window.location.replace('schools.php');</script>";
        }else {
            echo "<p class='text-danger'>Invalid Username or Password</p>";
        }
        }
    

    public function selectALL() {
        // query
        $sql = "SELECT * FROM club_interests ORDER BY ci_id ASC";
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
        $sql = "SELECT * FROM club_interests WHERE ci_id=$id";
        // execute or run the query
        $result = $this->conn->query($sql);

        if($result) {
            return $result->fetch_assoc();
        } elseif($result->conn->error) {
            echo "Error" . $this->conn->error;
        }
    }

        public function save($ciname) {

            $sql = "INSERT INTO club_interests(ci_name)
                    VALUES('$ciname')";
                    // excute or the query
                    $result = $this->conn->query($sql);

                    if($result) {
                        return true;
                    } else {
                        echo "Error: " . $this->conn->error;
                    }

       
    }
    public function update($id, $ciname) {
        $sql = "UPDATE clubs SET ci_name='$ciname' WHERE ci_id=$id";
                // excute or run the query
                $result = $this->conn->query($sql);
                if($result) {
                    return true;
                }else {
                    echo "Error: " . $this->conn->error;
                }
    }

    public function delete($id) {
        $sql = "DELETE FROM club_interests WHERE ci_id=$id";
        // execute or the query
        $result = $this->conn->query($sql);

        if($result) {
            return true;
        } else {
            echo "Error: " . $this->conn->error;
        }
    }


}

