<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            <div class="col-12 h3 text-dark">Signup</div>
        </div>

        <form action="../api/signup.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="John" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <input type="number" name="mobile" placeholder="Mobile" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control">
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form-group mb-3">
                        <input type="text" name="address" placeholder="Address" class="form-control">
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form-group mb-3">
                        <input type="file" name="image" placeholder="Image" class="form-control">
                    </div>
                </div>
            </div>



            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="form-group mb-3">
                        <label class="form-label">Select your role</label>
                        <select name="role" id="role" class="form-select mb-3">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="form-group text-center mb-3">
                <input type="submit" value="Signup" class="btn btn-primary">
            </div>

        </form>
        <div class="row text-center">
            <div class="col-12 h6">
                Already have an account? <a href="http://localhost/php/">Login here</a>
            </div>
        </div>

    </div>
</body>

</html>