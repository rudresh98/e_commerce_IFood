<?php


    mysql_connect("localhost" , "root" ,"");
    mysql_select_db("ifood");

    $un = $_POST['phone'];
    $pw = $_POST['password'];

    $un=stripcslashes($un);
    $pw=stripcslashes($pw);
    $un=mysql_real_escape_string($un);
    $pw=mysql_real_escape_string($pw);

    $query = mysqli_query("select phone , password  FROM  signup  WHERE  phone='$un' AND password='$pw' ");


    $row = mysql_fetch_array($query);

    if ($row['phone'] == $un && $row['password'] == $pw) 
    {
        echo "LogIN Sucessful Welcom".$row['phone'];
        
    } else {
        echo " Failed ";
        
    }
   ?>
