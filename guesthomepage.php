<?php
SESSION_start();
  $check=mysql_query("SELECT * FROM users WHERE username = '$username'") or die(mysql_error());
$info=mysql_fetch_assoc($check);
$_SESSION['guestname']=$info['guestname'];
$_SESSION['id']      =$info['id'];
//$_SESSION['examname']='CME ECET';
?>
<div class="centerbox">
    <div class="topbox">
        <h1 align='center' style="color: #FF3300;">Welcome tO Online Exam</h1>
    </div>
<hr>
    <div class="rightbox">
        <a href="about.php"><h5 align="right" style="left: 83%;">About |</h5></a><a href="welcome1.php"><h5 align="right">Create Account</h5></a>
    </div>
    <div class="leftbox">
        <h5 align="left">Let's start <?php echo $_SESSION['username']; ?></h5><br/>
            <ol><a href='exampage.php'><font size='5' align='left'>C Language</font></a></ol>
            <ol><a href='information_technology.php'><font size='5' align='left'>Information Technology</font></a></ol>
    </div>
</div>



<html>
<link href="allcss.css" type="text/css" rel="stylesheet">
    <body bgcolor="#f0f0f0" link="#0000ff">
        </body></html>
