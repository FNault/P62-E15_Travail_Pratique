<?php
    $users = null;
    function users_fetching(){
        global $users;
        $mysqli = new mysqli("localhost", "root", "", "mydb");

        $sql = "SELECT name from users";
        $result = $mysqli->query($sql);

        $id = 1;
        while($row = $result -> fetch_assoc()){
            $users[$id] = array();
            // add users info into an array
            array_push($users[$id], $row);
            $id++;

        }
        $sql2 = "SELECT password from users";
        $result2 = $mysqli->query($sql2);
        $id2 = 1;
        while($row2 = $result2 -> fetch_assoc()) {
            array_push($users[$id2], $row2);
            $id2++;
        }
        mysqli_close($mysqli);

    }

    function login(){
        users_fetching();
        global $users;
        $j = 0;
        $i=1;
        $admin = false;
        for($i; $i<=count($users); $i++) {
            $user = $users[$i];
            if (isset($_POST['Username']) && $_POST['Username'] == $user[$j]['name'] && $_POST['Password'] == $user[$j + 1]['password']) {
                global $admin;
                $admin = true;
                return $user;
            }
            $j = 0;
        }
        if(!$admin){
            header("location:Index.php?Page=Connexion");
            exit;
        }

    }
?>