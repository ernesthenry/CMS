<?php
if (!isset($page_title)) {
    $page_title = 'Staff Area';
}

//error reporting
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css');?>">
    <title>GBI - <?php echo $page_title; ?></title>
</head>

<body>
    <header>
        <h1>GBI Staff Area</h1>
    </header>

    <navigation>
        <ul>
        <li><a href="<?php echo url_for(('/staff/index.php')); ?>">Menu</a></li>
        </ul>
    </navigation>