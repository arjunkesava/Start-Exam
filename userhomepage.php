<?php
 include 'header.inc';

 $check=mysql_query("SELECT * FROM users WHERE username = '$username'") or die(mysql_error());
$info=mysql_fetch_assoc($check);
$_SESSION['username']=$info['username'];
$_SESSION['userid']=$info['userid'];
$userid=$_SESSION['userid'];
$check=mysql_query("SELECT themename FROM themes WHERE userid = '".$_SESSION['userid']."';") or die(mysql_error());
$info=mysql_fetch_assoc($check);
$_SESSION['themename']=$info['themename'];
 echo"<body bgcolor='#f0f0f0' link='#0000ff' background='".$_SESSION['themename'].".jpg'></body>";
//$_SESSION['examname']='CME ECET';
//$themedata=mysql_query("Select themename from themes where userid='$userid';");
//$themeinfo=mysql_fetch_assoc($themedata);
//$_SESSION['theme']=$themeinfo['themename'];
//if($themeinfo['themename']=='bgpat.jpg')
//{
//}
//else{

?>
<script>
 function clang()
{
    var ename="C_Language";
    //alert("this is "+ename);
    window.location.href = "mainexampage.php?DBGSESSID=-1&ename=" + ename;
}
function it()
{
    var ename="It";
    //alert("this is "+ename);
    window.location.href = "mainexampage.php?DBGSESSID=-1&ename=" + ename;
}
function gk()
{
    var ename="Gk";
    //alert("this is "+ename);
    window.location.href = "mainexampage.php?DBGSESSID=-1&ename=" + ename;
}
function aptitude()
{
    var ename="Aptitude";
    //alert("this is "+ename);
    window.location.href = "mainexampage.php?DBGSESSID=-1&ename=" + ename;
}
function english()
{
    var ename="English";
    //alert("this is "+ename);
    window.location.href = "mainexampage.php?DBGSESSID=-1&ename=" + ename;
}
function computer_gk()
{
    var ename="Computer_Gk";
    //alert("this is "+ename);
    window.location.href = "mainexampage.php?DBGSESSID=-1&ename=" + ename;
}
</script>
<div class="centerbox">
    <div class="topbox">
        <h1 align='center' style="color: #FF3300;">Welcome tO Online Exam</h1>
    </div>
<hr>
    <div class="rightbox">
         <div class="tabs">
    <div class="tab">
        <input type="radio" id="tab-1" name="tab-group-1"  align="right">
        <label for="tab-1"><img src="power.png" alt="\|/" width="40px" height="40px"  align="right" style="text-shadow: 0px 0px 85px black;"></label>
        <div class="tab close-tab">
            <input type="radio" id="tab-close" name="tab-group-1"  align="right">
            <label for="tab-close"><img src="power.png" alt="\|/" width="40px" height="40px" align="right" style="text-shadow: 0px 0px 85px black;"></label>
        </div>

        <div class="content" style="background-color: gray;">
        <ul>
          <li><a href="themes.php">Theme</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
    </div>
    </div>
    <div class="leftbox">
        <h5 align="left">
        <?php   echo "Let's start ".$_SESSION['username'];  ?>
        </h5><br/>
            <ol><a href='#' onclick="clang()" style="nostyle"><font size='5' align='left' color="blue">C Language</font></a></ol>
            <ol><a href='#' onclick="it()"><font size='5' align='left' color="blue">Information Technology</font></a></ol>
            <ol><a href='#' onclick="gk()"><font size='5' align='left' color="blue">General Knowledge</font></a></ol>
            <ol><a href='#' onclick="aptitude()"><font size='5' align='left' color="blue">Aptitude</font></a></ol>
            <ol><a href='#' onclick="english()"><font size='5' align='left' color="blue">English</font></a></ol>
            <ol><a href='#' onclick="computer_gk()"><font size='5' align='left' color="blue">Computer General Knowledge</font></a></ol>
            <ol><a href='old_exam_list.php'><font size='5' align='left' color="blue">Check Old Exams</font></a></ol>
             <?
             if($_SESSION['username']=="hradmin173")
            {
                ?>
                <ol><a href='userentry.php'><font size='5' align='left'>Student Entry</font></a></ol>    
                <ol><a href='viewexamadmin.php'><font size='5' align='left'>Student Entry</font></a></ol>    
                <?
            }
            ?>  
            
    </div>
</div>

<html>
<link href="allcss.css" type="text/css" rel="stylesheet">
<link href="tabs.css" type="text/css" rel="stylesheet">
</html>
        <?php
        $qnoarr=array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19);
        shuffle($qnoarr);
        $_SESSION['qnoarr']=$qnoarr;
        /*
        print "U r HALL TICKET number is: <h1>" . $_SESSION['id'] . "</h1>";
echo "Hai " . $_SESSION['username'];
    echo "<br/><a href='logout.php' align='center'><font class='logout' size='5'>Logout</font></a>";
    */

?>
    
