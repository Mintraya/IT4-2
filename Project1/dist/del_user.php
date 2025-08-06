<?php
    $username = $_GET['username'];
    require '../connect.php';
    $sql = "DELETE FROM users WHERE usernsme='$username'";
    $result = $con->query($sql);
    if(!$result){
        echo "<script>alert('Can not delete')</script>";
    } else{
        echo "<script>window.location.href='index.php?page=users'</script>";
    }


?>