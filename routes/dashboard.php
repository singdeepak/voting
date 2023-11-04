<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("Location: ../");
    }

    $userdata = $_SESSION['userdata'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo "http://localhost/php/css/bootstrap.min.css"; ?>">
</head>
<body>
    <div class="container-fluid bg-secondary">
        <div class="container">
            <div class="row justify-content-between py-3">
                <div class="col-md-3">
                    <a href="#" class="btn btn-danger">Back</a>
                </div>

                <div class="col-md-4">
                    <h2 class="h2 text-light">Onling Voting System</h2>
                </div>

                <div class="col-md-3">
                    <a href="#" class="btn btn-danger offset-9">Logout</a>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid mt-5">
        <div class="row justify-content-around">
            <div class="col-md-3 bg-secondary text-center">
                <img src="../uploads/<?php echo $userdata['image']; ?>" class="img-thumbnail">
                <h5 class="h5"><?php echo $userdata['name']; ?></h5>
                <h5 class="h5"><?php echo $userdata['contact']; ?></h5>
                <h5 class="h5"><?php echo $userdata['address']; ?></h5>
                <p class="badge bg-danger"><?php echo $userdata['status']; ?></p>
            </div>

            <div class="col-md-7 bg-secondary">
                3
            </div>
        </div>
    </div>
</body>
</html>