<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = $name = $college = $course = $year = $pno = "";
$username_err = $password_err = $confirm_password_err = $name_err = $college_err = $course_err = $year_err = $pno_err =  "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter an email.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM data WHERE email = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                header("location: ../RegistrationFailed/index.html");
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    //validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter a name.";
    } elseif (strlen(trim($_POST["password"])) < 3) {
        $name_err = "Please Enter your Full name";
    } else {
        $name = trim($_POST["name"]);
    }




    if (empty(trim($_POST["college"]))) {
        $college_err = "Please enter a college.";
    } else {
        $college = trim($_POST["college"]);
    }

    if (empty(trim($_POST["course"]))) {
        $course_err = "Please enter a course.";
    } else {
        $course = trim($_POST["course"]);
    }

    //validate name
    if (empty(trim($_POST["year"]))) {
        $year_err = "Please enter your completion year.";
    } else {
        $year = trim($_POST["year"]);
    }


    if (empty(trim($_POST["pno"]))) {
        $pno_err = "Please enter your completion phone number.";
    } else {
        $pno = trim($_POST["pno"]);
    }

    // echo "<script> alert('$username')</script>";

    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($pno_err) && empty($name_err) && empty($college_err) && empty($course_err) && empty($year_err)) {

        // Prepare an insert statement
        $hash_pass = password_hash($password, PASSWORD_DEFAULT);
        // Prepare an insert statement
        $sql = "INSERT INTO data (email, password,name,pno,college,course,year) VALUES ('$username','$hash_pass','$name','$pno','$college','$course','$year')";
        $result = mysqli_query($link, $sql);
        if ($result) {
            // Redirect to login page
            header("location: ../success/index.html");
        } else {
            header("location: ../RegistrationFailed/index.html");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <title>Virtual Internship Fair'22 | Register</title>
    <link rel="shortcut icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="../registration/registration.css">
</head>

<body>
    <a class="navbar-brand font-weight-bold text-monospace" href="../index.html">
        <div class="header__logo-box">
            <img src="../img/logo.png" alt="Logo" class="header__logo">
        </div>
    </a>
    <div class="user">
        <header class="user__header">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
            <h1 class="user__title">Register for Virtual Internship Fair 2021</h1>
        </header>
        <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form__group">
                <input type="text" placeholder="Name" name="name" class="form__input" value="<?php echo $name; ?>" required>
                <span class="help-block"><?php echo $name_err; ?></span>
            </div>
            <div class="form__group">
                <input type="email" placeholder="Email" name="username" class="form__input" value="<?php echo $username; ?>" required>
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form__group">

                <input id=pass placeholder="Password" type="password" name="password" class="form__input" value="<?php echo $password; ?>" required>
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form__group">

                <input id="conf-pass" placeholder="Confirm Password" type="password" name="confirm_password" class="form__input" value="<?php echo $confirm_password; ?>" required>
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form__group">

                <input type="text" placeholder="Phone Number" name="pno" class="form__input" value="<?php echo $pno; ?>" required>
                <span class="help-block"><?php echo $pno_err; ?></span>
            </div>

            <div class="form__group">

                <input type="text" placeholder="College" name="college" class="form__input" value="<?php echo $college; ?>" required>
                <span class="help-block"><?php echo $college_err; ?></span>
            </div>
            <div class="form__group">

                <input type="text" placeholder="Course" name="course" class="form__input" value="<?php echo $course; ?>" required>
                <span class="help-block"><?php echo $course_err; ?></span>
            </div>
            <div class="form__group">
                <input type="text" placeholder="Year" name="year" class="form__input" value="<?php echo $year; ?>" required>
                <span class="help-block"><?php echo $year_err; ?></span>
            </div>
            <div class="form__group">
                <input id="cbox" type="checkbox" name="checkbox" onclick="Toggle()">
                <label style="color:white; display:inline;font-family:karla;" for="cbox">Show Password</label>
            </div>
            <script>
                // Change the type of input to password or text 
                function Toggle() {
                    var temp = document.getElementById("pass");
                    var conftemp = document.getElementById("conf-pass");
                    var cbox = document.getElementById("cbox").checked
                    if (cbox) {
                        temp.type = "text";
                        conftemp.type = "text";
                    } else {
                        temp.type = "password";
                        conftemp.type = "password";
                    }
                }
            </script>
            <button class="btn" type="submit">Register</button>
            <div>
                <p class=" login">Already registered? <a href="../loginsystem/login.php">Login Here</a></p>
            </div>
        </form>
    </div>
</body>

</html>