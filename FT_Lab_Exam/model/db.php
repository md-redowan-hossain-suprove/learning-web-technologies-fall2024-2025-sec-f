<?php

    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'test');
        return $con;
    }

    function login($username, $password){
        $con = getConnection();
        $sql = "select * from authors where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count ==1){
            return true;
        }else{
            return false;
        }
    }

    function addAuthor($username, $fullname, $password, $phone){
        $con = getConnection();
        $sql = "insert into authors VALUES('', '{$username}', '{$fullname}', '{$password}', {$phone}, 'author')";
        if(mysqli_query($con, $sql)){
            return true;
        } else{
            return false;
        }
    }

    function updateUser($id, $username, $fullname, $password, $phone){
        $con = getConnection();
        $sql = "update authors SET username='$username', fullname='{$fullname}', password='$password', contact=$phone where id='$id'";
        if(mysqli_query($con, $sql)){
            return true;
        } else{
            return false;
        }
    }

    function deleteUser($id){
        $con = getConnection();
        $sql = "DELETE FROM authors where id=$id";
        if(mysqli_query($con, $sql)){
            return true;
        } else{
            return false;
        }
    }

    function getUser($id){
        $con = getConnection();
        $sql = "select * from authors where id='{$id}'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function getAllAuthors(){
        $con = getConnection();
        $sql = "select * from authors where type='author'";
        $result = mysqli_query($con, $sql);

        $authors = [];

        while($row = mysqli_fetch_assoc($result)){
            //print_r($row);
            //echo "<br>";
            array_push($authors, $row);
        }
        
        return $authors;
    }

    function searchAuthors($search = '') {
        $con = getConnection();
    
        if ($search) {
            $search = mysqli_real_escape_string($con, $search); 
            $sql = "SELECT * FROM authors WHERE (username LIKE '%$search%' OR fullname LIKE '%$search%') AND type='author'";
        } else {
            $sql = "SELECT * FROM authors WHERE type='author'";
        }
    
        $result = mysqli_query($con, $sql);
    
        $authors = [];
    
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($authors, $row);
        }
    
        return $authors;
    }
    
    

?>