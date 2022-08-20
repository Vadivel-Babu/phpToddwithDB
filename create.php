<?php
include 'DB.php';
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $Lname = $_POST["lastname"];
    if(strlen($name)==0 && strlen($Lname) == 0){
        echo 'Enter valid input';
    }else{
        echo $name;
        echo $Lname;
        $sql = "INSERT INTO todo (firstname,lastname) VALUES ('$name','$Lname')";
        $result = $connection -> query($sql);
        if($result){
            header('location:index.php');
        }else{
            echo 'error';
        }
    } 

 }
 extract($_REQUEST);
 if(isset($submit) && $submit == 'delete' ){
    
    // echo $id;
    // echo "delete";
    $sql = "DELETE FROM todo WHERE id='$id'";
    $result = $connection -> query($sql);
    if($result){
        header('location:index.php');
    }else{
        echo 'error';
    }
 }
 extract($_REQUEST);
 if(isset($update) && $update == 'edit' ){
   
    $sql = "UPDATE todo SET firstname='$name', lastname='$lastname' WHERE id=$id ";
    $result = $connection -> query($sql);
    if($result){
        header('location:index.php');
    }else{
        echo 'error';
    }
 }

?>