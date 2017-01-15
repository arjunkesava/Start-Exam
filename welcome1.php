<?php
 include 'header.inc';

// if (isset($_POST['submit'])) 
 //{ 
     //user enters wrong data;
     // if form has been submitted
     // makes sure they filled it in
     if(!$_POST['username'] | !$_POST['pass']) 
     {
         header("Location: welcome1.html");
         //die("Please enter all the fields and <a href='welcome1.html'><h2>Login<h2></a> again.");
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
         wrongpwd();
         //die("The username you entered has not been created.<br/>Plese check it once again.<br/><br/><h2><a href='welcome1.html'>Go Back</a></h2>");
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
                    wrongpwd();
                    //die("Wrong password.<h2><a href='welcome1.html'>Go Back</a></h2> & Try Again");
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

     function wrongpwd()
{

    ?><head>
﻿        
<link rel="stylesheet" type="text/css" href="allcss.css">
<style>
            body{
                height:100%;
                width:100%;
                background-image:url(img.jpg);
                    }
</style>
</head>
<body>
<table class="down" align="center" height="115%" border="0" cellpadding="10" cellspacing="2">
            <tr>
                <td style="width:50%; height:586px;" align="center">
                    <div style="width: 550px; height: 253px" >
                    <form action="collegeuser.php" method="get" >
                    <p align="center">
                    <span class="style1"><font size="+1" color="#0000FF" align="center"><span style="width: 258px">Login as College</span></font></span><br/>
                    </p>
                    <p align="center">
                    <input type="text" class="box" name="guest" style="width:290px; height:35px" placeholder="Type Your Name & Hit Go"/>
                    </p><p align="center">
					<input id="pass" type="password" name="pass"  class="box" style="width: 340px; height: 35px" placeholder="Ur Password"/>
                    <br /></p>
                    <input type="submit" id="submit" name="submit"  class="subbox" value="Go" style="width: 50px; height: 35px" ></p>
                    </form>
                    <form action="welcome1.php" method="post" name="formcheck" style="height: 262px">
                            <p align="center">
                                <span class="style1"><font size="+1" color="#0000FF" align="center"><span style="width: 258px">Login:</span></font></span>
                            </p>
                            <p align="center">

                                <input type="text" name="username" id="username" class="box" style="width: 340px; height: 35px" placeholder="Ur Name"><br />
                            </p>
                            <p align="center">

                                <input id="pass" type="password" name="pass"  class="box" style="width: 340px; height: 35px" placeholder="Ur Password"/>
                                <br />
                            <p align="center">
                                <input type="submit" id="submit" name="submit"  class="subbox" value="Lets Start" align="center" style="width: 260px; height: 35px" >
                            </p>
                            <p align="center">

                                <?php
    echo"<font color='#ff0000'><blink>Password Invalid.<blink></font>";
}
?>
                            </p>
                        </form>
                    </div>
                </td>
                <td width="50%" height="50%" align="center">
                    <div style="width: 553px; height: 40%">
                        <form action="newuseracc.php" method="post">
                            <p align="center">
                                <span class="style1"><font size="+1" color="#000066" ><span style="width: 258px">Create Yours:</span></font></span>
                            </p>
                            <p align="center">
                            <input type="text" name="username" id="username"  class="box" placeholder="Type Your Name Here" style="width: 340px; height: 35px">
                            <br />
                            </p>
                            <p align="center">
                            <input id="pass" type="password" name="pass" class="box" style="width: 340px; height: 35px" placeholder="Type Your Password Here"/>
                            <br />
                            </p>
                            <p align="center">
                            <input id="pass2" type="password" name="pass2" style="width: 340px; height: 35px"  class="box" placeholder="Retype Your Password Here"/>
                            <br />
                            </p>
                            <p align="center">
                            <input type="submit" name="submit" id="submit" value="Continue" align="center" style="width: 260px; height: 35px"  class="subbox"/><br/>
                            </p>
                        </form>
                    </div>
                </td>
            </tr>

</body>