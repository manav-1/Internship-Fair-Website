<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

// if the result != null then header ==> success otherwise header ==> fail



    // header('Location: ../success/index.html' );
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // validate the fields, send the email, etc.
        // echo "inside post req ";
        $name = $_POST['name'];

        $email = $_POST['email'];

        $pno = $_POST['phone'];
        
        $pass = $_POST['password'];

        $college = $_POST['college'];

        $course = $_POST['course'];

        $year = $_POST['year'];

        // echo "I Am {$name} {$email}  {$number}  {$college}{$course}  {$year}";
        $connection = mysqli_connect("localhost", "id16346194_manav", "RANDOM*8989a", "id16346194_data") or die("Couldn't connect to server");
        $query = "INSERT INTO data (name , email , pno , college , course , year, password) VALUES( '$name' , '$email' , '$pno' , '$college' ,'$course' , '$year', '$pass' )"
        or die("Couldn't connect to server");
        $result = mysqli_query($connection, $query) or die("Query failed : " . mysqli_error($connection));

        if($result){
            echo "<script>window.location.href = '../success/index.html'</script>";
        }
    else{
        echo "<script>window.location.href = '../RegistrationFailed/index.html'</script>";
    }
    }
    ?>
</body>

</html>