<?php
    include 'db.php';

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    $image  = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    if($password == $cpassword){
        move_uploaded_file($temp_name, "../uploads/$image");

        $query = "insert into user(name, contact, password, address, image, role, status, votes) values ('{$name}', '{$mobile}', '{$password}', '{$address}', '{$temp_name}', '{$role}', 0, 0)";

        if(mysqli_query($conn, $query)){
            echo '
            <script>
                window.location = "../";
            </script>
        ';
        }else{
            echo '
            <script>
                alert("Some error occured...!");
                window.location = "../routes/register.php";
            </script>
        ';
        }
    }else{
        echo '
            <script>
                alert("Password not matched...!");
                window.location = "../routes/register.php";
            </script>
        ';
    }
?>