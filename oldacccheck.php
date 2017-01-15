<?php
 include 'header.inc';
 
// if (isset($_POST['submit'])) 
 //{ 
     //user enters wrong data;
     // if form has been submitted
     // makes sure they filled it in
     if(!$_POST['username'] | !$_POST['pass']) 
     {
         die("Please enter all the fields and <a href='welcome1.html'><h2>Login<h2></a> again.");
         //header('Location: welcome.html');
     }
     // checks it against the database
     if (!get_magic_quotes_gpc()) 
     {
         $_POST['username'] = addslashes($_POST['username']);
     }
     
//Gives error if user dosen't exist
     $check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());
     $check2 = mysql_num_rows($check);
     if ($check2 == 0) 
     {
         die("The username you entered has not been created.<br/>Plese check it once again.<br/><br/><h2><a href='welcome1.html'>Go Back</a></h2>");
     }
     else
     {
        while($info = mysql_fetch_array( $check ))     
        {
            $_POST['pass'] = stripslashes($_POST['pass']);
            $info['password'] = stripslashes($info['password']);
            $_POST['pass'] = md5($_POST['pass']);
                //gives error if the password is wrong
            if ($_POST['pass'] != $info['password']) 
                {
                    die("Wrong password.<h2><a href='welcome1.html'>Go Back</a></h2> & Try Again");
                }
            else
                {
                     //USer enters correct data;
                     $_POST['username'] = stripslashes($_POST['username']);
                     $hour = time() + 3600; 
                     setcookie(ID_my_site, $_POST['username'], $hour); 
                     setcookie(Key_my_site, $_POST['pass'], $hour);
                    //echo"<a href='userhomepage.php'>Click here to go to ur account</a>";
                    header ( "Location: userhomepage.php") ;
                }
        }
     }
//}
/* else
 {
     echo"<a href='file:///H|/singlework/NewPHP/Start Exam/userhomepage.php'>Click here to go to ur account</a>";
     //USer enters correct data;
   $_POST['username'] = stripslashes($_POST['username']);
   $hour = time() + 3600; 
   setcookie(ID_my_site, $_POST['username'], $hour); 
   setcookie(Key_my_site, $_POST['pass'], $hour);*/

   
   // Redirected area;
   //header ( "Location: file:///H|/singlework/NewPHP/Start Exam/userhomepage.php") ;
 
?>
