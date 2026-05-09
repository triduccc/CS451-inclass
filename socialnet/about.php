<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
|--------------------------------------------------------------------------
| Check login
|--------------------------------------------------------------------------
*/

if (!isset($_SESSION["username"])) {

    header("Location: /socialnet/signin.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <style>

        body {
            font-family: Verdana, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        /*
        |--------------------------------------------------------------------------
        | Navbar
        |--------------------------------------------------------------------------
        */

        .navbar {
            background-color: #2e8b57;
            padding: 15px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        /*
        |--------------------------------------------------------------------------
        | Content
        |--------------------------------------------------------------------------
        */

        .container {
            width: 80%;
            margin: 30px auto;

            background: white;
            padding: 30px;

            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .info-box {
            margin-top: 20px;

            padding: 20px;

            border: 1px solid #ddd;
            border-radius: 5px;

            background-color: #fafafa;
        }

    </style>

</head>
<body>

<!-- Navbar -->

<div class="navbar">

    <a href="/socialnet/index.php">Home</a>

    <a href="/socialnet/setting.php">Setting</a>

    <a href="/socialnet/profile.php">Profile</a>

    <a href="/socialnet/about.php">About</a>

    <a href="/socialnet/signout.php">Sign Out</a>

</div>

<!-- Content -->

<div class="container">

    <h1>About Page</h1>

    <div class="info-box">

        <p>
            <strong>Student Name:</strong>
            Nguyen Tri Duc
        </p>

        <p>
            <strong>Student Number:</strong>
            1695216
        </p>

    </div>

</div>

</body>
</html>
