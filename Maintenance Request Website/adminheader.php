<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body id="wrapper">
        <header class="header" style="margin-bottom: -50px">
            <img class="logo" src="logo.png" alt="logo">
            <h1 class="text">Maintenance Request</h1>
            <div><h3 class="text" style="margin-right: 165px;">Welcome <?php echo $_SESSION['name']; ?></h3></div>
            <ul>
                <li><a href="destroy.php">Sign Out</a></li>
                <li><strong> | </strong></li>
                <li><a href="addadmin.php">Add an administrator</a></li>
                <li><strong> | </strong></li>
                <li><a href="archive.php"> Archive</a> </li>
                <li><strong> | </strong></li>
                <li><a href="unsolved.php"> Unsolved </a></li>
                <li><strong> | </strong></li>
                <li><a href="problemlist.php"> Home </a></li>
            </ul>
        </header>