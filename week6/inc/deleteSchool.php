<?php

    include('functions.php');
    require('../reuseable/con.php');
    $id = $_GET['id'];

    $query = "DELETE FROM schools WHERE `id` = '$id'";
    $school = mysqli_query($connect, $query);

    if($school){
        set_message('School deleted successfully!','danger');
        header('Location: ../index.php');
    }else{
        echo "Failed: " . mysqli_error($connect);
    }