<?php

// define constant variables
define('DB_NAME', 'epiz_29632692_alphawins02');
define('DB_USER', 'epiz_29632692');
define('DB_PASSWORD', 'Uq6QQAZQ36');
define('DB_HOST', 'sql301.epizy.com');

try{

    // connection variable
    $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // encoded language
    mysqli_set_charset($con, 'utf8');


}catch (Exception $ex){
    print "An Exception occurred. Message: " . $ex->getMessage();
} catch (Error $e){
    print "The system is busy please try later";
}