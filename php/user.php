<?php
    session_start();
    $list_of_username = array();
    $list_of_fname = array();
    $list_of_sname = array();
    $list_of_email = array();

    array_push($list_of_username, "lambda");
    array_push($list_of_fname, "lambda");
    array_push($list_of_sname, "vary");
    array_push($list_of_email, "lv@gmail.com");
    array_push($list_of_username, "alpha");
    array_push($list_of_fname, "alpha");
    array_push($list_of_sname, "vary");
    array_push($list_of_email, "av@gmail.com");
    array_push($list_of_username, "sigma");
    array_push($list_of_fname, "sigma");
    array_push($list_of_sname, "vary");
    array_push($list_of_email, "sv@gmail.com");
    array_push($list_of_username, "faraklit");
    array_push($list_of_fname, "mr");
    array_push($list_of_sname, "faraklit");
    array_push($list_of_email, "frank@gmail.com");
    $_SESSION['arr1'] = $list_of_username;
    $_SESSION['arr2'] = $list_of_fname;
    $_SESSION['arr3'] = $list_of_sname;
    $_SESSION['arr4'] = $list_of_email;
?>
