<?php
session_start();
mysql_connect("localhost", "root", "tiger") or die(mysql_error());
mysql_select_db ("exam") or die(mysql_error());

//mysql_query("select * from users")
//checks cookies to make sure they are logged in 
//if($userid!=NULL)
//{
if (isset($_COOKIE['ID_my_site']))
    {
    
    $username=$_COOKIE['ID_my_site'];
    $pass    =$_COOKIE['Key_my_site'];
    $check   =mysql_query("SELECT * FROM users WHERE username = '$username'") or die(mysql_error());

    while ($info=mysql_fetch_array($check))
        {
        //if the cookie has the wrong password, they are taken to the login page 
        if ($pass != $info['password'])
            {
            header ("Location: welcome1.html");
            }
        }
    }
else //if the cookie does not exist, they are taken to the login screen 
    {
    header ("Location: welcome1.html");
    }
 //}
   
    ?>