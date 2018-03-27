<?php
    mysql_connect("localhost", "rishidb2", "password") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("users") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
     
     
     
?>