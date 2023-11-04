<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo "http://localhost/php/css/bootstrap.min.css"; ?>">
</head>

<body>
    <div class="container-fluid bg-danger py-2 mb-5">
        <div class="row text-center">
            <div class="col-12 h2 text-light">Online Voting System</div>
        </div>
    </div>

    <div class="container">
        <div class="row text-center mb-3">
            <div class="col-12 h3 text-dark">Login</div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="api/login.php" method="POST" autocomplete="off">
                    <div class="form-group mb-3">
                        <input type="text" id="contact" name="contact" value="" class="form-control" placeholder="Enter contact">
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" id="password" name="password" value="" class="form-control" placeholder="Enter password">
                    </div>

                    <select name="role" id="role" class="form-select mb-3">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select>


                    <div class="form-group text-center mb-3">
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12 h6">
                New user? <a href="http://localhost/php/routes/register.php">Register here</a>
            </div>
        </div>
    </div>
</body>

</html>