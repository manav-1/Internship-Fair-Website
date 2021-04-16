<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../companies/style.css">
    <link rel="shortcut icon" type="image/png" href="../img/logo.png">
    <title>Virtual Internship Fair'22 | Companies</title>
    <style type="text/css">
        /* body {
            font: 14px sans-serif;
            text-align: center;
        } */
    </style>
</head>

<body>
    <div class="bg">
        <div class="header__logo-box">
            <a href="../index.html">
                <img src="../img/logo.png" alt="Logo" height=50 class="header__logo">
            </a>
        </div>



        <div class="col-sm-12 mb-5 ">
            <h1 class="text-center text text-white mt-5 mb-3">Companies and Profiles</h1>
        </div>

        <!-- <div class="middle">
         <h1>COMING SOON</h1>
         <hr>
         <p class="texter" id="demo"></p>
     </div>
    </div><script src= "script.js"></script> -->
        <div id="posts" class=" mx-auto row">

            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/12.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Zomato Feeding India</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company1">Know your Company</a>
                                <a href="../JobDesc/Zomato.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/oWhRrB1P9VknLUBw6" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/1.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Pratham Institute</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company2">Know your Company</a>
                                <a href="../JobDesc/Pratham Institute JD.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/nMkX7rQn5HrBmBFE6" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/13.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">DigiFuse</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company3">Know your
                                    Company</a>
                                <a href="../JobDesc/Digifuse Marketing Internship - JD.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://docs.google.com/forms/d/1DhZOkno8HpiYNjomOaPkUX1lVYkXzbbHGIJKjq1ss5g/edit" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/6.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Edudictive</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company4">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/Edudictive JD .pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/U3DVoZ5JMUi4qDQeA" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/15.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Koozies Icecream</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company6">Know
                                    your Company</a>
                                <a href="../JobDesc/Koozies BDE JD.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/zVwU7jqMhWRuJmjZ8" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/2.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">WhiteHat JR</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company7">Know
                                    your Company</a>
                                <a href="../JobDesc/Whitehat JR JD.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/3xV731ES3HR7q4eN6" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/36.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Innovalence Learning Systems</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company8">Know
                                    your Company</a>
                                <a href="../JobDesc/Innnovalance Learning Systems JD .pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/CmKiALzscvf2nVo36" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/5.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Hareen</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company10">Know
                                    your Company</a>
                                <a href="../JobDesc/Hareen.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/r2EYbhvio7T5YPcf9" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/7.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Blitz Jobs</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company11">Know
                                    your Company</a>
                                <a href="../JobDesc/BLITZ JOBS.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/gJTnwTu2wkDwDzcn8" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/9.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Go Dutch Pay</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company12">Know
                                    your Company</a>
                                <a href="../JobDesc/Go  Dutch Pay JD .pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/VoNLHiQWSrPRAkZw5" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/11.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">iFortis</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company14">Know
                                    your Company</a>
                                <a href="../JobDesc/Ifortis.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/nWgh8VR7o9tYHydU6" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/39.jpg" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Opulence</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company15">Know
                                    your Company</a>
                                <a href="../JobDesc/OPULENCE GROUP.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/Mmgioipj52SqfRVM6" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/37.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Growth Arrow Company</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company16">Know
                                    your Company</a>
                                <a href="../JobDesc/JD.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/xbvHA65wtHqJh1f36" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/22.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Chartered Club</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company17">Know
                                    your Company</a>
                                <a href="../JobDesc/Chartered Club JD .pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/VHwGmSAtxjQk737w6" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/38.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Skill Arena Technologies</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company18">Know
                                    your Company</a>
                                <a href="../JobDesc/Skillarena.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/7QkPqvsAFuVeMRwCA" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/23.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">TBH Circle</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company19">Know
                                    your Company</a>
                                <a href="../JobDesc/TBH Circle - Intern Feb. 2021.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/W1HWixD469U7SuvW7" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/14.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">FilmyLoop</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company20">Know
                                    your Company</a>
                                <a href="../JobDesc/FilmyLoop JD.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/bYx1oPuEy465VuAg8" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/16.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">GHP India Services</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company21">Know
                                    your Company</a>
                                <a href="../JobDesc/GHP India Services.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://docs.google.com/forms/d/1i4x0zzLRKwwRz7PdYqiatduOcnA858-4UJ5K-ldUu6A/edit" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/17.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Follege</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company22">Know
                                    your Company</a>
                                <a href="../JobDesc/Follege Jd.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://docs.google.com/forms/d/1vqdHxbkrKmPgdkSrkl3J1UbkYNit5n8WuoZj8XMjAMM/edit" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/18.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Artysan</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company23">Know
                                    your Company</a>
                                <a href="../JobDesc/Artysan Job Description.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://docs.google.com/forms/d/1-uP-ko2xIPDoAwRGd7nGlEkB-H-j-sr94MryUkYWoS0/edit" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/19.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">The Healthy Company</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company24">Know
                                    your Company</a>
                                <a href="../JobDesc/THC - JD.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/TBR4f4PaAm2NUp1V9" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/20.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">QuizCraft Global</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company25">Know
                                    your Company</a>
                                <a href="../JobDesc/Quizcraft.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/K5ThYZs94kW5xPSc9" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/21.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Bachat Baazi</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company26">Know
                                    your Company</a>
                                <a href="../JobDesc/Bachat Baazi - Marketing Internship.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/aj6yLCME1yUgqiX66" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/35.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">SafeJobs</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company27">Know
                                    your Company</a>
                                <a href="https://www.notion.so/Safejob-Campus-Ambassador-Program-528db67cf15343cb9ae2b3aa8738fa2d" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/4LppvjQgoE9Z7RTV7" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/24.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Now and Me</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company28">Know
                                    your Company</a>
                                <a href="../JobDesc/NOW and me.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/p3s5VPkwsPBZ44B29" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/25.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">UnSchool</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company29">Know
                                    your Company</a>
                                <a href="../JobDesc/Unschool.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/gbPt8EyKydNtaEVq6" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/26.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">India Fellow</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company30">Know
                                    your Company</a>
                                <a href="../JobDesc/JD - Fellow.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/TjXbBhQ3wfqR1eo4A" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/27.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Arbitrium</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company32">Know
                                    your Company</a>
                                <a href="../JobDesc/Arbitrium Internship Details.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/WpNwkUnYRZKHrzu88" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/28.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Adhyapak Online</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company33">Know
                                    your Company</a>
                                <a href="../JobDesc/Adhyapak Online JD.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/3xMQnKWp3nPWDgcA7" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/29.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Metvy</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company34">Know
                                    your Company</a>
                                <a href="../JobDesc/MetvY JD .pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/aCffm48Fe1f87CMR9" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/30.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Teach For India</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company35">Know
                                    your Company</a>
                                <a href="../JobDesc/TeachForIndia.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/JWSJrNCFFcn5drkm8" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/34.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Homefic Wegrow Community</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company36">Know
                                    your Company</a>
                                <a href="../JobDesc/JOB DESCRIPTION HOMEFLIC WEGROW PVT LTD.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/oMkxqa9ZokVGccG16" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/31.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Younity</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company37">Know
                                    your Company</a>
                                <a href="../JobDesc/Younity.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/YVzNXJkMiovqTUoa8" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/32.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Picxele</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company38">Know
                                    your Company</a>
                                <a href="../JobDesc/Picxele.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/2Uza6Wj9TVJyzhhJ7" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/33.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">FinSkool</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company39">Know
                                    your Company</a>
                                <a href="../JobDesc/FinSkool_ Equity Advisor.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/sh5VN2BW45cy9TNz9" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/54.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Apoxy Media</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company40">Know
                                    your Company</a>
                                <a href="../JobDesc/APOXY.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/akLJai3zemxzXBJM7" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/40.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">ShareKhan</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company41">Know
                                    your Company</a>
                                <a href="../JobDesc/Sharekhan Internship.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/HzzZP6AyBL92dNs3A" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/42.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">AIESEC</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company42">Know
                                    your Company</a>
                                <a href="../JobDesc/AIESEC  JD.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/DP9ArcCk9w97QAYQ6" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/43.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Your Campus Guide</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company43">Know
                                    your Company</a>
                                <a href="../JobDesc/YourCampusGuide.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/D3EE4PoycTKUDv4g6" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/44.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">Nanhe Pakshi</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company44">Know
                                    your Company</a>
                                <a href="../JobDesc/NANHE PAKSHI.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/eBMEBDqtgQVtL6979" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/45.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            Unnati</h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company45">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/unnati.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/91rHbyyaVn62696f8" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/46.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            Edu4Sure
                        </h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company46">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/Edu4Sure.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/wkXkdy4bdPtQotya8" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/41.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            Buffalo Soldiers
                        </h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company47">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/Job Description Master - Buffalo Soldiers.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://docs.google.com/forms/d/1vc-otunu-qhiUub4wKZKnrLSuYLhVhDoeIzvubj8L0s/edit" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/47.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            Kids Chaupal
                        </h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company48">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/0_Kidschapul Internship JD.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://docs.google.com/forms/d/1Bku1nvQOskvZv2fUHpnGhFPIHWV9sZYA2E92cmyWTQU/edit" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/48.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            Sankalp
                        </h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company49">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/Sankalp Ngo Jd.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/DyaQhg7XepWdpwns9" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/49.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            CueMath
                        </h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company50">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/Cuemath.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/yRxhHb71KVhgjzra6" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/50.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            Vuuume
                        </h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company51">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/JD- Vuuume.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/sqMzZcTKtmmM26Jr6" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/51.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            LeadSquared
                        </h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company52">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/Intern-SDE - LeadSquared-India - Updated.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://docs.google.com/forms/d/1axI0XYGmbMLUaC5USSezTT3IgCVpUYDpdY0XNolnOkw" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/52.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            My Captain
                        </h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company53">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/myCaptain.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://docs.google.com/forms/d/1VO-YbFAMNtkkFgzil2dPjAidnwKHi2qsnlS-ktvHhaY/edit" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/53.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            Lern EZY
                        </h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company54">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/LernEzy.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/udMHWFXUyjuAJ6my5" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/55.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            Seekify
                        </h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company55">Know
                                    your
                                    Company</a>
                                <a href="https://www.notion.so/JD-Management-Trainee-CEO-s-office-bc2b9896588d438d9d200d836c0c98a4" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/FwvTSbCoeB1oNWio9" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/57.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            Frantiger
                        </h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company56">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/Frantiger.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/v1NevqwvCP95otBG6" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/58.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            Adornplus
                        </h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company57">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/Adornplus Internship College Program.pdf" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/6XXbx5e26ZAaqajc9" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card pt-4">
                    <img class="card-img-top company" src="../Companyimages/59.png" alt="Card image">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            Foot The Ball
                        </h4>
                        <div class="row">
                            <div class="d-flex flex-row justify-content-around  col-sm-12 my-3">
                                <a href="#" class="btn btn--green btn--animated" data-toggle="modal" data-target="#company58">Know
                                    your
                                    Company</a>
                                <a href="../JobDesc/Job Description Master - FootTheBall.docx" target="_blank" class="btn btn--green btn--animated">Job
                                    Description</a>
                            </div>
                            <div class="col-sm-6 mx-auto">
                                <a href="https://forms.gle/cLgt5GAaowMYKf7B6" class="btn btn--green btn--animated">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




















































            <div class="modal fade" id="company1">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Zomato Feeding India</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/12.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Zomato Feeding India – Towards Zero Hunger<br></strong>
                                Zomato Feeding India is not for profit organization designing interventions to bridge
                                the gap between food waste and hunger in India, with a growing network of 25,000+
                                volunteers present across 100+ cities in India and have served over 3.4 crore meals to
                                those in need so far. Zomato Feeding India continues to work towards its joint mission
                                of ‘better food for more people’ and ‘food for everyone’ to take the dream of ending
                                hunger a step closer to reality.<br> This is a role for the students in university or
                                college to become change leaders in their space.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company2">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Pratham Institute</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/1.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Pratham Institute<br></strong>
                                PRATHAM is an educational institute that remains adamant in emerging as one of the
                                leading institutes, enhancing the budding youth into successful individuals. PRATHAM
                                that means ‘the first one’ leaves no stone unturned in catering to the paramount careers
                                of many just like the name suggests. The flourishing organization has been adept in
                                providing aid to more than 80,000 students, thriving to pave their careers remarkably in
                                the race. PRATHAM succors to enhance overall personalities of individuals who splurge
                                both with intelligence and prowess.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company3">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">DigiFuse</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/13.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>DigiFuse<br></strong>
                                Digifuse is an organization which blends global digital technologies to help businesses
                                build their brand presence through our extensive student network.

                                We provide effective digital marketing solutions by running various campus activations,
                                user acquisitions and brand awareness campaigns through youth marketing. We have worked
                                for 100+ brands to promote them through our student network..
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company4">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Edudictive</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/6.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Edudictive<br></strong>
                                Edudictive (edudictive.in) is an ed- tech startup inculcating 21st century Skills among
                                School
                                kids & College students.We believe in beginning as early as possible. Current Scenario
                                is
                                highly competitive, beginning early is the sole solution, and also, we focus more on
                                building
                                problem solving skills which stands one apart from others.
                                Skills in which we are up skilling our Youth are broadly Classified as Design,
                                Development,
                                Entrepreneurship, content curation, Data science & Business Management.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company6">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Koozies Icecream</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/15.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Koozies Icecream<br></strong>
                                Koozies is a startup born out of a 50 years legacy in the Ice cream industry. We provide
                                premium quality Ice cream products to food businesses throughout Delhi/NCR and are
                                looking forward to expanding to different horizons and catering to new consumers.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company7">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">WhiteHat JR</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/2.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>White Hat Jr.<br></strong>
                                WhiteHat Jr's mission is to empower a whole generation to become creators versus
                                consumers of technology. They teach fundamentals of coding--logic, structure, sequence
                                and algorithmic thinking to enable kids to generate creative outcomes eg websites,
                                animations and apps. All classes are taught 1:1 Live Online by Top 1% of early childhood
                                coding experts
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company8">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Innovalence Learning Systems</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/36.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Innovalence Learning Systems<br></strong>
                                Innovalance is a leading content development company which helps organizations from
                                across the world achieve their business goals through its world class educational
                                content and other content writing related services all under one roof.

                                Innovalance develops content keeping in mind the students which means our content is
                                student driven. Our team of subject matter experts has relevant expertise and
                                experience, which they draw upon to create content that inspires learning.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company10">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Hareen</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/5.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Hareen<br></strong>
                                Hareen is the biggest and fastest-growing startup originated from Delhi University with
                                a team of
                                more than 200 students. Founded in 2017, earlier it was mainly confined to Delhi
                                University students satisfying the needs and wants of students by providing them from
                                accommodation to organizing trips and much more. Growing at a steady pace, it managed to
                                capture different universities and colleges. Hareen is an umbrella organization with 4
                                units under it : (R&D for the fourth unit is going on. It will be launched in the market
                                soon.)
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company11">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Blitz Jobs</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/7.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Blitz Jobs<br></strong>
                                Blitzjobs has been established with a vision to provide best-in class workforce
                                solutions to organizations, colleges and individuals alike. Blitzjobs is the ultimate
                                solution for all the HR problems organizations face. We are 100% committed to providing
                                our clients with top notch solutions that leave them satisfied and accelerate their
                                growth.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company12">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Go Dutch Pay</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/9.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Go Dutch Pay<br></strong>
                                goDutch is a new-age fintech app that powers group payments for millennials. They are on
                                the lookout
                                for passionate individuals who want to drive the next phase of cutting-edge fintech
                                innovation.
                                goDutch is founded by IIT Bombay graduates with a total work experience of 10+ years in
                                fintech. The company is backed by marquee Silicon Valley investors like Tinder's
                                co-founder, Y
                                Combinator, Matrix Partners and many others.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company14">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">iFortis Corporate</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/11.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>iFortis Corporate<br></strong>
                                IFortis Corporate has grown into one of India’s leading Corporate. In its infancy,
                                IFortis was in the business of IT Services & Marketing Services. As time evolved,
                                dependence on the technology began to hinder IFortis’s ability to guarantee competitive
                                pricing and provide innovative services. IFortis also noticed the lack of communication
                                that had become an industry standard. As a result, a strategic decision was made to set
                                up its own headquarters in India in order to better satisfy the needs of IFortis’s
                                customers.

                                Based upon demographic and geographic research, IFortis chose Sivakasi, India, as the
                                location to begin it’s facility. As time went on, IFortis’s principals of transparency,
                                timely communication, quality of services and competitive pricing allowed for
                                significant expansion.

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company15">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Opulence</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/39.jpg" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Opulence<br></strong>
                                We, at Opulence group, are in the Business of Fund Management, Investment Banking,
                                Business consulting, and FinTech. Over and above, we have a strong belief in our CSR
                                called " ONE WORLD MOVEMENT".

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company16">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Growth Arrow Company</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/37.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Growth Arrow Company<br></strong>
                                GROWTH ARROW SERVICES, is an independent financial service domain, located in Bangalore,
                                India. After several years of experience, they are looking to update and strengthen
                                their services. Developing a strong commitment of clients and trainees in an easy manner
                                plays an important role, to understand and learn in a better way. They develop and
                                implement the strategies that are proven and useful to many clients.
                                They have 1000+ clients throughout the world which stands the best testaments, Growth
                                Arrow is an innovative platform for educating and mentoring the theory towards wealth
                                and prosperity.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company17">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Chartered Club</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/22.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Chartered Club<br></strong>
                                Chartered Club HR Consultancy is one of the leading providers of top-notch HR solutions.
                                It was established in 2011 as an HR vertical of Chartered Club, which was founded by the
                                renowned tax expert, CA Karan Batra.

                                It was established with a vision to offer world-class service to the clients such that
                                they find a one-point solution for all their HR requirements. It was awarded the
                                prestigious ISO 9001:2001 certificate for providing impeccable services to its clients.

                                At present they are the one of leading recruiters in finance domain. They sustain a
                                committed team that understands the precise demand of their client and serve them to the
                                best of their ability.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company18">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Skill Arena Technologies </h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/38.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Skill Arena Technologies<br></strong>
                                Skillarena is an interactive platform for learners who are willing to enhance their
                                skills and expand their knowledge horizons by the advancement of science, methodology,
                                practical applicability, and technology. They want the youngsters to travel their
                                crucial journey from campus to corporate with their assistance and guidance at every
                                point, in case they find themselves stuck between career choices.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company19">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">TBH Circle</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/23.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>TBH Circle<br></strong>
                                Even the Superhero needs a mentor & support to evolve and grow. Hence, here we are
                                empowering you to harness the alpha version of yourself. The amazing part is we a tbh
                                imbibe indigenous practical tools for our superheroes to utilise during their entire
                                career. The platform is a bridge ensuring a smooth journey in your career. The programs
                                offered to develop you in the three major areas of skills, attitude and knowledge.

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company20">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Filmy Loop</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/14.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>FilmyLoop<br></strong>
                                FILMYLOOP is a community that thrives on sharing what the world needs. As marketers, as
                                writers, as
                                entertainers, as advisors, and as speakers, we bring life to the skills of those around
                                us. From
                                highlighting the principles of management to citing hilarious jokes to lighten the mood,
                                we share all that
                                there is to know.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company21">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">GHP India Services</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/16.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>GHP India Services<br></strong>
                                With a mission to provide holistic services, GHP India is a one-stop destination for
                                fulfilling all the needs of the corporate and manufacturing industry. GHP believes in
                                delivering high-impact and economic solutions to businesses. GHP’s team is spearheaded
                                by our Principal Consultant, Mr. Vijay Srivastava. Vijay has been a leader and a
                                visionary who has been a leader and direction giver to the Human Resources function
                                across major industries with his recognised experience of over 27 years.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company22">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Follege</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/17.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Follege<br></strong>
                                Follege is a social platform that has all the information about college activities and
                                events. It gives students a chance to make connections online with like-minded people.
                                The app aims at making communication easier, faster, and better. College is a plethora
                                of opportunities but only if one is aware and alert. The college information on current
                                online platforms is scattered. It even gets distorted, altered, and missed out due to
                                the lack of an umbrella system. As a result, the students feel inadequate, hesitant, and
                                confused. A sound digital platform is the backbone of any industry. We bring that for
                                college students to help them live smartly.

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company23">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Artysan</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/18.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Artysan<br></strong>
                                Catering to all your artistic, aesthetic, and digital marketing needs, Artysan is a
                                startup venture that took its roots in New Delhi, with a wide range of domains offered
                                through its plethora of services. Vouching for 100% customer satisfaction, Artysan has
                                carved a path into its clients’ hearts using ‘Art’ as its forte.

                                Through its consolidated expertise, Artysan wishes to bridge the gap between artists,
                                the artwork, and common folk - recreating a vision to help intensify the globe’s love
                                for creativity! The sky’s the limit to their artistic imagination, as they’re always
                                teeming with novel ideas!

                                Customer-centric solutions delivered within limited amount of time. Artysan believes in
                                going above and beyond to help you envision the best!
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company24">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">The Healthy Company</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/19.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>The Healthy Company<br></strong>
                                The Healthy Company (a brand under Alnourish), they make personalized health plans
                                consisting of nutrition planning & scientific superfood products to help fight obesity
                                and lifestyle conditions like thyroid, high BP, diabetes, etc. We allow you to have your
                                personal AI health coach free of cost, that understands your body, your lifestyle, your
                                preferences and makes goal strategies, diet plans, dynamically recommends meals and
                                superfoods, leveraging its learnings from the data of thousands and potentially millions
                                of other users.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company25">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Quiz Craft Global</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/20.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Quiz Craft Global<br></strong>
                                Quizcraft Global create programmes for students, corporates, embassies, institutions,
                                the differently abled, and the underprivileged. We work on all aspects of the
                                project—from concept, outreach design, execution to conduction—to ensure benefits for
                                all.
                                Quizcraft Global has powered over 4000 knowledge shows across the world. They create
                                innovative formats and challenging content for live events, TV shows, radio shows, web
                                portals, books, and social media. They have a dedicated team in New Delhi, and a cloud
                                of vendors in India and overseas. They have very popular in-house quizmasters and also
                                liaise with celebrity hosts. They bring to our clients and our programmes immense
                                experience and passion.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company26">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Bachat Baazi</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/21.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Bachat Baazi<br></strong>
                                Bachat Baazi is a gamified e-commerce platform. On Bachat Baazi, one can win amazing
                                products such as electronics,
                                kitchen appliances, gift cards, and more for upto 90% off!! Their users have won
                                products like Noise smartwatches, Samsung
                                smartphones, Whirlpool Microwaves, Amazon Gift Cards etc.

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company27">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Safe Jobs</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/35.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>SafeJobs<br></strong>
                                Safejob was born in a Covid world, with the coming together of Safeducate and Seekify.
                                The founders are Divya, Ajeet and Arihant. Divya has built a formidable business in
                                Safeducate over the last 10 years that provides skilling and training to over 50K
                                students every year. Ajeet and Arihant have helped build multiple successful tech
                                startups in the past decade including HealthKart, 1mg, Joe Hukum and Freshworks.
                                We believe that India’s youth has the will and capacity to drive our nation towards a
                                beautiful future. We want to do our bit by giving them a chance to become a contributing
                                member of our society and the workforce. For businesses and recruiters, we help you hire
                                individuals that are job-ready and more likely to succeed.
                                We are joined by a team with amazing work experience and great education
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company28">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Now and Me</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/24.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Now and Me<br></strong>
                                The idea to start Now&Me was to give everyone a chance to begin again.

                                To leave the insecurities of Instagram, the monotony of Facebook, the noise at
                                Twitter...feel free to add any other social media outlets that have contributed to the
                                stress we feel in our digital lives.
                                As wonderful a tool as social media might be to connect, inspire, learn and grow, it has
                                not come without its fair share of struggles. With the trolling, the hate, the pressure
                                to conform and to perform, it only seems to have added to our long list of tensions.
                                Being able to talk to someone who cares, listens and understands shouldn’t be a
                                privilege reserved for a few.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company29">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Unschool</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/25.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Unschool<br></strong>
                                Unschool is an e-mentorship platform awarded and recognized by the Government of India
                                and incubated at T-Hub (Hyderabad) with 50000+ students, 50+ mentors across the country
                                with 100,000+ hours of course videos. Unschool is reviewed as the Top 10 Digital
                                Learning Portals of 2019 by the Higher Education Magazine. The e-learning platform has
                                also ranked 3rd on LinkedIn's 2020 Top Startups List in India.

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company30">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">India Fellow</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/26.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>India Fellow<br></strong>
                                India Fellow is an 18-month social leadership program for young Indians willing to work
                                at grassroots and find
                                their leadership potential to make a difference. It is an experiential journey to
                                immerse in the social realities of
                                our country and being our best version to build a better future.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company32">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Arbitrium</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/27.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Arbitrium<br></strong>
                                Arbitrium is a modern online solution provider and an open courseware that contrives
                                people
                                onto the path of prosperity with greater yield of productivity soliciting lesser
                                perspiration. We
                                help people realise their potential, making them known of their abilities and guide them
                                with
                                the best of our best knowledge, thereby building their faith. We help them find a safe
                                space to
                                ask all their questions and provide one to one sessions on how to surpass their daily
                                problems
                                and help them envisage that their problems are not as big as they think they are. Our
                                aim is to
                                build a community where everyone is invincible and we can encourage each other and help
                                people in forming a strong mental health state and a powerful vibe.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company33">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Adhyapak Online</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/28.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Adhyapak Online<br></strong>
                                Our mission is to promote education for all the generations via digital platforms. Our
                                Learning Platform is empowering the learners of today and tomorrow through Live classes,
                                Live Experiments and words from Mentors; which make learning Interactive and Engaging.
                                We focus on the transparency, ensured through visual learning modules prepared by our
                                seasoned team of academicians, experts and senior members. Adhyapak Online gives
                                complete attention and guidance for all online education related needs, which allows you
                                to learn anywhere, anytime !.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company34">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Metvy</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/29.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Metvy<br></strong>
                                Metvy is aimed at utilizing the infinite human potential present hyper-locally through
                                an automated intuitive platform that provides need-based networking where people can
                                find like-minded people around them. It is an application built on an AI-based algorithm
                                that works with your real-time location and your unique networking needs. By taking
                                information such as your current work experience, education details, skills, likes, the
                                AI can predict your networking needs and recommend you accordingly. The AI takes this
                                input and draws out relations between different sets of skills, job titles, experience,
                                age and requirements of the people and then classifies the people on the app based on
                                these relations, to group together similarly minded people and those people who can
                                connect instantly with each other.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company35">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Teach For India</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/30.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Teach For India<br></strong>
                                At Teach For India, we believe leadership for education is the solution. We are building
                                a movement of leaders who will eliminate educational inequity in India.

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company36">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Homefic WeGrow Community</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/34.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>HomeFic Wegrow Community<br></strong>
                                Homeflic wegrow is a tribe of people from all over the world, having diverse mindsets
                                and
                                personalities, learning and growing together. It’s a platform where people can showcase
                                their
                                talent, discuss their problems, talk about trending topics and build a network stronger
                                than any
                                bond. Focusing on holistic development of our members along with us, we believe in
                                learning,
                                working, and growing together.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company37">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Younity</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/31.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Younity<br></strong>
                                Younity.in is a student community of ever-growing learners. We at Younity.in, work
                                together as a team establishing trust, respect and value for all its members. We strive
                                to build a community where students come together and shape themselves for a better
                                future. Younity.in aims to guide the students at every walk of college life, right from
                                choosing college to choosing oppurtunities after college. Younity.in follows a holistic
                                approach to a college student’s development.
                                We work under 5 broad domains:
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company38">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">picxele</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/32.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>picxele<br></strong>
                                picxele helps companies in meeting their on-demand work requirements through trained Gig
                                Workers, where companies pay only for results delivered not for manpower.

                                Through Picxele, companies can meet their requirements through Influencer Marketing,
                                Content Creation, WhatsApp Marketing, User Acquisition, Campus Marketing, Social Media
                                Engagement, Data Entry, Transcription, Merchant Onboarding, Field Operations, Vendor
                                Acquisition, Account Management, Online Survey, Mystery Auditing, Market Research, Data
                                Collection, On-Field Surveys, Product Sampling, Online Reputation Management, Lead
                                Generation, Geo-tagging, Identity Verification, Telephonic Customer Support, Screening
                                Resources and much more.

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company39">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">FinSkool</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/33.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>FinSkool<br></strong>
                                FinSkool is subsidiary of Sanguine Capital which is an e-learning

                                venture of Finance & Investment Programs.

                                We mixed blend of learning with technology for better approach
                                along with to see every Individual financially sound & independent.
                                Sanguine Capital is a self-made advisory firm offering education and
                                advisory services in the financial industry. The primary objective of the
                                company is to provide a helping hand to retail investors to economize
                                their money. In the main, it is endeavouring in educating individuals
                                about the solutions it disburses and the mannerism in which they can
                                put these into good use. We are associated with many industry
                                leaders like Motilal Oswal, Narnolia, Money Life Advisory, ICICI AMC,
                                Weekend Investing, Equitywala.com for advising investors who wish
                                to enter into the market and on the same want to create their own
                                wealth.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company40">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Apoxy Media</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/54.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Apoxy Media<br></strong>
                                Incepted in 2017, Apoxy has covered a long way in the minutest time frame, as the
                                preferred performance marketing partner for advertisers and agencies. The services we
                                deliver are customer centric and make sure excellence is catered to towards the target
                                customers.

                                We provide solutions that prove highly successful for the following sectors – Small
                                Business, Health & Lifestyle, Matrimony, Online Trading, Education, Ecommerce, Finance,
                                Telecom, Travel, Automotive, App Installation, Coupons, Dating, Horoscopes, Real Estate,
                                Recruitment, Sports, Survey Campaigns and many more.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company41">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">ShareKhan</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/40.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Sharekhan<br></strong>
                                Founded in 2000 and a subsidiary of BNP Paribas since November 2016, Sharekhan was one
                                of the first brokers to offer online trading in India. With 20 lakh customers, 153
                                branches and more than 2400 business partners spread across over 541 locations,
                                Sharekhan is one of the largest brokers in India. Sharekhan offers a wide range of
                                savings & investment solutions including equities, futures and options. currency
                                trading, portfolio management, research and mutual funds and investor education. On an
                                average, Sharekhan executes more than 400,000 trades daily
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company42">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">AIESEC</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/42.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>AIESEC<br></strong>
                                We are a non-political, independent, not-for-profit organisation run by students and
                                recent graduates of institutions of higher education. Since we were founded in 1948, we
                                have engaged and developed over 1,000,000 young people who have been through an AIESEC
                                experience. The impact of our organisation can be seen through our alumni who represent
                                business, NGO and world leaders.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company43">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Your Campus Guide</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/43.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Your Campus Guide<br></strong>
                                We aim to provide a platform for every student and every youth out there to join and
                                grow with our network, can improve his/her skills, network with people of the same
                                interests and pursue his/her passion.

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company44">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Nanhe Pakshi</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/44.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Nanhe Pakshi<br></strong>
                                Nanhe Pakshi is a youth organisation started by Ms Pallavi Kashyap and Mr Shubham Sharma
                                who are both alumni of the prestigious Delhi University It was inaugurated on 9th August
                                2018. Our NGO aims at creating an utopia where everyone has access to education and
                                basic human rights, a society without social division where everyone is treated equally
                                is our ultimate goal.

                                Our organisation comprises of like minded individuals who are open to ideas. Our
                                volunteers work tirelessly in serving the impoverished section of the society and are
                                dedicated to uplift the society and bring about positivity through unique and
                                unconventional ideas.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company45">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Unnati</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/45.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Unnati<br></strong>
                                Unnati is the go-to destination for the next-gen workforce to upgrade their careers.
                                More than 2 million people trust Unnati to help them find their dream job. We work with
                                established companies as well as promising startups to bring exciting job vacancies to
                                you.

                                We have helped several B2C, B2B, FMCG, Fin-tech, Ed-tech, Saas etc companies to hire
                                great talent

                                We serve job seekers and clients by being process-oriented and delivering quality
                                services consistently. That's a core driving philosophy behind our efforts towards
                                automation, process standardization, and quality systems.

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company46">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Edu4Sure</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/46.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Edu4Sure<br></strong>
                                Edu4Sure started as a blog and now acts as a Training & Digital Strategy Consulting
                                division of TestFormula
                                Education Pvt Ltd. We are looking forward to creating more amazing work in the field of
                                Training & Recruitment.

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company47">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Buffalo Soldiers</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/41.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Buffalo Soldiers<br></strong>
                                We are your digital story architects - For brands and businesses, For people and
                                products, For causes and consciences. For startups and sometimes upstarts!

                                We specialize in smart digital storytelling to grow your organization, connect your
                                community, and make the world a better place - created collaboratively with you to help
                                you catch up to the future.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company48">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Kids Chaupal</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/47.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Kids Chaupal<br></strong>
                                KidsChaupal introduces your child to the world of opportunities and learning, keeping in
                                mind the future needs, without eliminating the fun quotient. Our well-organized
                                activities are backed by years of research and training to create transformational
                                experiences and holistic development of your child.

                                We believe in a 360-degree approach that emphasizes on your child’s overall personality
                                development by giving them expert mentorship and a global platform. We create and curate
                                services with great love and care by industry experts. We foster strong learning
                                abilities and value system in your child while improving their competitive skills to
                                achieve more. All our events are optimized for child-safety, learning techniques,
                                visibility, and a memorable experience.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="company49">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Sankalp</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/48.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Sankalp<br></strong>
                                SANKALP is a newly registered NGO, established in 2018. In the past years, we have
                                expanded our network to 8 states (21 cities) and 2 UT's. In Delhi NCR alone, we are
                                working in 18 slum areas and we aim to cover 25+ slums by the end of next year. During
                                Covid 19 outbreak we have extended our work virtually too, taking 27 cities in India,
                                US, Uk, Japan, Australia, Canada, Zimbabwe and a few other countries in our ambit.

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company50">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">CueMath</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/49.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>CueMath<br></strong>
                                Cuemath is a Google funded Ed Tech start-up. We are a sophisticated Ed tech start-up
                                that
                                provides after-school math excellence program for children from kindergarten to grade 10
                                and is
                                offered through home-based centres and online platforms. Cuemath strives to make
                                children great at
                                math with the belief that math can transform a child's future. The centres are managed
                                and run by
                                trained and certified Cuemath teachers who share Cuemath's vision of math excellence.
                                Founded in
                                2013, there are over 5,000+ centres educating more than 40,000 students across the
                                country and
                                Dubai. Present across over 80 cities in India currently, we are charting out an
                                ambitious and exciting
                                journey to take Cuemath global by expanding our international footprint, and would love
                                to have
                                passionate, driven individuals to join us.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company51">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Vuuume</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/50.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Vuuume<br></strong>
                                Vuuume helps you break your boundaries with its unique platform. Now book artists
                                on-the-go. Refresh yourself with a live performance according to your mood for the day.
                                When you can't step out for entertainment, let entertainment come to you!
                                Register below to access thousands of musicians around you, waiting to take you down the
                                memory lane.
                                Get, Set, Explore.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company52">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">LeadsSquared</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/51.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>LeadsSquared<br></strong>
                                LeadSquared is a marketing automation and sales execution platform that helps businesses
                                increase their
                                closures, manage their pipelines, and attribute their ROI accurately and completely - to
                                people, marketing
                                activities, lead sources, products, and locations. It is used by over 1000 businesses
                                across 30 countries in
                                Education, Healthcare, Banking, Insurance and a variety of verticals.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company53">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">My Captain</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/52.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>My Captain<br></strong>
                                The Climber is an Education Startup that helps students discover and pursue their
                                Passions through MyCaptain and large city wide Youth fests, summits and bootcamps.
                                MyCaptain by The Climber is an Online platform that helps you take the first step in
                                your field of passion with the help of young achievers, mentors and guides.
                                We are focused towards the United Nations SDGs (Sustainable Development Goals)
                                especially SDG 4: Quality Education, SDG 8: Decent Work and Economic Growth and SDG 17:
                                Partnerships for the Goals.

                                Our captains are under the age of 25 and have gone through the same journey these
                                students wish to undertake. They are published authors, young entrepreneurs, investors,
                                award-winning film makers, journalists, designers, developers etc. A student who wants
                                to write a book gets mentored by a young published author. A student who is passionate
                                about entrepreneurship is mentored by founders of startups.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company54">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">LernEazy</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/53.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>LernEazy<br></strong>
                                LernEzy makes sure that every student’s voice is heard. We aim to innovate the age-old
                                learning process by finding easier, better, and faster methods. Our vision is to aspire
                                students to achieve their full potential. The ultimate goal is to make the lives of
                                students better by bringing in a positive change in their lives.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company55">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Seekify</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/55.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Seekify<br></strong>
                                Building An Intelligent Platform To Solve For Employability. In a post-covid world, our
                                mission is to solve one of the most fundamental problems around us - employability. We
                                help businesses with better job ready employees. We help our youth launch their careers.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company56">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Frantiger</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/57.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Frantiger<br></strong>
                                FranTiger Business Consulting is Asia's first integrated Management Consulting Company.
                                FranTiger is catering to Franchise Consulting, Business Brokerage, Turnkey Solutions, IT
                                & Startup Services.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="company57">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">AdornPlus</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/58.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>AdornPlus<br></strong>
                                Adornplus is a digital marketing agency that mainly deals with two digital platforms
                                i.e. Instagram and Facebook, where consultation is given regarding account optimization,
                                hashtags, boosting your business or personal account from our Instagram expert and
                                Facebook expert respectively, We sincerely present our service of writing and editing
                                under our agency, starting from email writing to poem writing, one can ease themselves
                                from writing when they reach us.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="company58">
                <div class="modal-dialog">
                    <div class="modal-content modal">
                        <div class="modal-header">
                            <h4 class=" modal-title">Foot The Ball</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="../Companyimages/59.png" height=300 alt="Card image" class="img-responsive">
                            <p class="kyc my-2">
                                <strong>Foot the Ball<br></strong>
                                FootTheBall is a growth stage start-up. FootTheBall explains the happenings in the
                                biggest global sport – from Brazil to England, America to Australia, South Korea to
                                Argentina, India to Nigeria – tailor-made for the Change Generation – people from every
                                corner of the globe who are challenging the status quo, resisting the obvious and
                                bucking convention. We’re committed to producing premium, original storytelling across
                                mediums to help you live curiously and understand the game that make life worth it.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div style="color:#fff">
                <h4>Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?></h4>
            </div> -->
            <!-- <br><br> -->
            <div class="d-flex flex-row justify-end">
                <!-- <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a> -->
                <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
            </div>
</body>

</html>