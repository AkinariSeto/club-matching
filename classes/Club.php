<?php

require_once "Config.php";

class Club extends Config {

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
        $sql = "SELECT * FROM club ORDER BY club_id ASC";
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
        $sql = "SELECT * FROM club WHERE club_id=$id";
        // execute or run the query
        $result = $this->conn->query($sql);

        if($result) {
            return $result->fetch_assoc();
        } elseif($result->conn->error) {
            echo "Error" . $this->conn->error;
        }
    }

        public function save($clubname, $school, $sport, $level, $ci, $user_id) {

            $sql = "INSERT INTO club(club_name, school_id, sport_id, user_id, level_id, ci_id)
                    VALUES('$clubname','$school','$sport','$user_id','$ci','$level')";
                    // excute or the query
                    $result = $this->conn->query($sql);

                    if($result) {
                        return true;
                    } else {
                        echo "Error: " . $this->conn->error;
                    }

       
    }
    public function update($id, $clubname) {
        $sql = "UPDATE club SET club_name='$clubname' WHERE club_id=$id";
                // excute or run the query
                $result = $this->conn->query($sql);
                if($result) {
                    return true;
                }else {
                    echo "Error: " . $this->conn->error;
                }
    }

    public function delete($id) {
        $sql = "DELETE FROM club WHERE club_id=$id";
        // execute or the query
        $result = $this->conn->query($sql);

        if($result) {
            return true;
        } else {
            echo "Error: " . $this->conn->error;
        }
    }

    public function selectClubsByUser($user_id) {
        $sql = "SELECT * FROM club WHERE user_id=$user_id";
        // execute or run the query
        $result = $this->conn->query($sql);

        if($result) {
            return $result->fetch_assoc();
        } elseif($result->conn->error) {
            echo "Error" . $this->conn->error;
        }
    }
    
    public function saveInvite($club_id, $my_club_id, $date) {
        $sql = "INSERT INTO club_invite(invited_club_id, club_id, date, status)
                VALUES('$club_id', '$my_club_id', '$date','pending')";
                $result = $this->conn->query($sql);

                if($result) {
                    echo "<script>window.location.replace('index.php');</script>";
                } else {
                    echo "Error: " . $this->conn->error;
                }

    }

    public function selectAllInvites($club_id) {
        // query
        $sql = "SELECT * FROM club_invite
                INNER JOIN club ON club.club_id=club_invite.club_id
                INNER JOIN schools ON schools.school_id=club.school_id
                INNER JOIN prefectures ON schools.prefecture_id=prefectures.prefecture_id
                INNER JOIN skill_level ON skill_level.level_id=club.level_id
                WHERE club_invite.invited_club_id=$club_id";
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
    
    public function acceptInvite($invite_id)
    {
        $sql = "UPDATE club_invite SET status='accepted' WHERE invite_id=$invite_id";
        // excute or run the query
        $result = $this->conn->query($sql);
        if($result) {
            return true;
        }else {
            echo "Error: " . $this->conn->error;
        }
    }

    public function cancelInvite($invite_id)
    {
        $sql = "UPDATE club_invite SET status='cancelled' WHERE invite_id=$invite_id";
        // excute or run the query
        $result = $this->conn->query($sql);
        if($result) {
            return true;
        }else {
            echo "Error: " . $this->conn->error;
        }
    }

    public function selectAllRequest($club_id) {
        // query
        $sql = "SELECT * FROM club_invite
                INNER JOIN club ON club.club_id=club_invite.club_id
                INNER JOIN schools ON schools.school_id=club.school_id
                INNER JOIN prefectures ON schools.prefecture_id=prefectures.prefecture_id
                INNER JOIN skill_level ON skill_level.level_id=club.level_id
                WHERE club_invite.club_id=$club_id";
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



}

