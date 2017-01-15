<?php
   mysql_connect("localhost","root","tiger") or die(mysql_error());
   mysql_select_db("exam") or die(mysql_error());
   if(isset($_POST['submit']))
   {
       
    if(!$_POST['username']|!$_POST['pass']|!$_POST['pass2'])
    {
        die('You did not complete all of the required fields');
    }
    if (!get_magic_quotes_gpc()) 
    {
         $_POST['username'] = addslashes($_POST['username']);
    }
     $usercheck = $_POST['username'];
     $check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'")or die(mysql_error()); 
     $check2 = mysql_num_rows($check);
     if ($check2 != 0) 
     {
         die('Sorry, the username '.$_POST['username'].' is already in use. Try another one');
     }
     if ($_POST['pass'] != $_POST['pass2']) 
     {
         die('Your passwords did not match. Try again');
     }
             echo $_POST['pass']."<br /><br />";

    // here we encrypt the password and add slashes if needed
     $_POST['pass'] = md5($_POST['pass']);
     if (!get_magic_quotes_gpc()) 
     {
         $_POST['pass'] = addslashes($_POST['pass']);
         $_POST['username'] = addslashes($_POST['username']);
     }
             echo $_POST['pass']."<br /><br />";

     // now we insert it into the database   
     $uniqid=uniqid();
     mysql_query("INSERT INTO users VALUES ('".$uniqid."','".$_POST['username']."','".$_POST['pass']."');") or die (mysql_error());
     echo"Congratulations. U have been Registered.<br/><br/><br/>".$_POST['pass'];
     mysql_query("insert into themes values('".$uniqid."','bgpat001');");
     echo"<a href='userhomepage.php'>Click here</a> to continue";
   }                                                                               
   ?>
<!doctype HTML>
<head>
<link rel="stylesheet" type="text/css" href="allcss.css">

</head>
