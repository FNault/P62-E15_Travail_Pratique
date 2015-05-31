<?php

    $articles = array(

    );


    function article_loader(){
        global $articles;
        // Connect to database server
        $mysqli = new mysqli("localhost", "root", "", "mydb");

        // SQL query
        $sql = "SELECT * FROM articles";

        // Execute the query
        $result = $mysqli->query($sql);

        // Loop the recordset $result
        // Each row will be made into an array ($row) using mysql_fetch_array
        while($row = $result -> fetch_assoc()) {

            // add articles into an array
            array_push($articles, $row);

        }

        // Close the database connection
        mysqli_close($mysqli);

        return $articles;
    }

?>