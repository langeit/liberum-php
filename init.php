<?php
    session_start();
    include 'config.php';

    define('DBHOST', $dbhost);
    define('DBUSER', $dbuser);
    define('DBPASS', $dbpass);
    define('DBNAME', $dbname);

    require 'classes/Database.php';
    require 'classes/Users.php';
    require 'classes/Time.php';
    require 'classes/Tickets.php';
    require 'classes/Department.php';
    $database = new Database;
    $users    = new Users;
    #$time = new Time;
    #$department = new Department;
    #$tickets = new Tickets;
?>