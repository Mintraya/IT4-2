<?php
    require '../connect.php';
    if (isset($_POST['save'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        if (empty($username) || empty($password) || empty($fullname) || empty($phone) || empty($email)) {
            echo "<script>alert('Please enter all data');history.back();</script>";
        }else{
            $exit_username = mysqli_fetch_array($con->query("SELECT * FROM users"));
            if ($username == $exit_username['username']) {
                echo "<script>alert('username นี้มีอยู่แล้ว');history.back();</script>";
            }else{
                $sql = "INSERT INTO users(username,password,fullname,phone,email) VALUES('$username','$password',
                '$fullname','$phone','$email')";
                $result = $con->query($sql);
                if (!$result){
                    echo "<script>alert('บันทึกข้อมูลผิดพลาด');history.back();</script>";
                }else{
                    header("<script>window.location.href:'index.php?page=users'</script>");
                }
            }
        }   
    }
?>
