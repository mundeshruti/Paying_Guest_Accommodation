<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link href="css/sign.css" rel="stylesheet">

</head>

<body>
    <br>
    <div class="col-md-5 mx-auto">
        <div class="card card-body">
            <h1 class="text-center">Sign-Up </h1>
            <div class="modal-body">
                <form id="signup-form" class="form" role="form" method="post" action="signup_submit.php">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                Full Name
                            </span>
                        </div>
                        <input type="text" class="form-control" name="full_name"maxlength="30"
                            required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                Phone Number
                            </span>
                        </div>
                        <input type="text" class="form-control" name="phone" maxlength="10"
                            minlength="10" pattern="[7-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                Email
                            </span>
                        </div>
                        <input type="email" class="form-control" name="email"  required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                Password
                            </span>
                        </div>
                        <input type="password" class="form-control" name="password" minlength="6"
                            required>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                Gender
                            </span>
                        </div>
                        <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
                        <label for="gender-male">
                        </label>
                        <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                        <label for="gender-female">
                            Female
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Create Account</button>
                    </div>
                    <div class="form-group">
                        <span>Already have an account?
                            <a href="login.php" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
</div>
</body>

</html>