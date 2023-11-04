<?php
    session_start();
    include 'db.php';

    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = "select * from user where contact = '{$contact}' AND password = '{$password}' AND role = '{$role}'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $userdata = mysqli_fetch_array($result);
        $result1 = mysqli_query($conn, "select * from user where role = 2");
        $groupdata = mysqli_fetch_all($result1, MYSQLI_ASSOC);

        $_SESSION['userdata'] = $userdata;
        $_SESSION['groupdata']= $groupdata;

        echo '
            <script>
                window.location = "../routes/dashboard.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Invalid Credential..!");
                window.location = "../";
            </script>
        ';
    }
?>